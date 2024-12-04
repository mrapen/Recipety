<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Category;
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
        return view('home', compact('latestRecipes', 'categories'));
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
        $recipes = Recipe::with(['category', 'ingredients'])->paginate(10);

        // Повертаємо вид зі рецептами
        return view('recipes.index', compact('recipes'));
    }
}

