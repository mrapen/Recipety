<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function home()
    {
        // Отримання останніх рецептів
        $latestRecipes = Recipe::latest()->take(6)->get();

        // Отримання популярних категорій (з обмеженням на відображення)
        $categories = Category::withCount('recipes')->orderBy('recipes_count', 'desc')->take(5)->get();

        // Повернення виду з даними
        if (Auth::check()) {
            return view('dashboard', compact('latestRecipes', 'categories'));
        }
        return view('welcome', compact('latestRecipes', 'categories'));
    }

    public function show($id)
    {
        // Отримуємо рецепт з усіма пов’язаними даними
        $recipe = Recipe::with(['category', 'ingredients'])->findOrFail($id);

        // Повертаємо вид із рецептом
        return view('recipes.show', compact('recipe'));
    }

    public function index()
    {
        // Отримуємо рецепти з усіма пов’язаними даними
        $recipes = Recipe::with(['category', 'ingredients']);

        // Повертаємо вид зі рецептами
        return view('recipes.index', compact('recipes'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('recipes.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $recipe = new Recipe($validated);
        if (Auth::check()) {
            $recipe->user_id = Auth::id();
        }
        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }
        $recipe->save();

        return redirect()->route('recipes.show', $recipe->id);
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $categories = Category::all();
        return view('recipes.edit', compact('recipe', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $recipe = Recipe::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $recipe->update($validated);
        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }

        return redirect()->route('recipes.show', $recipe->id);
    }

    public function destroy($id)
    {
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();
        return redirect()->route('recipes.index');
    }
}

