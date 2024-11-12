<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Метод для відображення списку всіх тегів
    public function index()
    {
        $tags = Tag::withCount('recipes')->get(); // Отримуємо теги з кількістю рецептів
        return view('tags.index', compact('tags'));
    }

    // Метод для відображення рецептів за певним тегом
    public function show($id)
    {
        $tag = Tag::with('recipes')->findOrFail($id); // Отримуємо тег разом із пов’язаними рецептами
        return view('tags.show', compact('tag'));
    }
}

