<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Метод для відображення списку всіх категорій
    public function index()
    {
        $categories = Category::all(); // Отримуємо всі категорії
        return view('categories.index', compact('categories'));
    }

    // Метод для відображення рецептів у певній категорії
    public function show($id)
    {
        $category = Category::with('recipes')->findOrFail($id); // Отримуємо категорію з її рецептами
        return view('categories.show', compact('category'));
    }
}

