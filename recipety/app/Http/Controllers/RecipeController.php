<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
use App\Models\Tag;

use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        // Отримання останніх рецептів
        $latestRecipes = Recipe::latest()->take(6)->get();
        
        // Отримання популярних категорій (з обмеженням на відображення)
        $categories = Category::withCount('recipes')->orderBy('recipes_count', 'desc')->take(5)->get();
        
        // Отримання популярних тегів
        $tags = Tag::take(10)->get();

        // Повернення виду з даними
        return view('home', compact('latestRecipes', 'categories', 'tags'));
    }

    public function show($id)
    {
        // Отримуємо рецепт з усіма пов’язаними даними
        $recipe = Recipe::with(['category', 'ingredients', 'tags', 'reviews.user'])->findOrFail($id);

        // Повертаємо вид із рецептом
        return view('recipes.show', compact('recipe'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('recipes.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $recipe = new Recipe($validated);
        $recipe->user_id = auth()->id();
        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }
        $recipe->save();

        $recipe->tags()->sync($request->tags);

        return redirect()->route('recipes.show', $recipe->id);
    }

    public function edit($id)
    {
        $recipe = Recipe::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('recipes.edit', compact('recipe', 'categories', 'tags'));
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
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'image' => 'nullable|image|max:2048',
        ]);

        $recipe->update($validated);
        if ($request->hasFile('image')) {
            $recipe->image = $request->file('image')->store('images', 'public');
        }
        $recipe->tags()->sync($request->tags);

        return redirect()->route('recipes.show', $recipe->id);
    }
}

