<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Показує результати пошуку.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = $request->input('query');

        $recipes = Recipe::query()
            ->where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->orWhereHas('ingredients', function ($q) use ($query) {
                $q->where('name', 'LIKE', '%' . $query . '%'); // Припускаємо, що `name` — це назва інгредієнта
            })
            ->with(['category', 'ingredients']) // Завантажуємо пов'язані категорії, теги та інгредієнти
            ->paginate(10);

        return view('search.index', compact('recipes', 'query'));
    }
}

