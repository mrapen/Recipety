<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    // Метод для відображення улюблених рецептів
    public function index()
    {
        // Отримуємо улюблені рецепти для авторизованого користувача
        $favorites = auth()->user()->favorites()->with('recipe')->get();

        return view('favorites.index', compact('favorites'));
    }

    // Метод для видалення рецепта з обраного
    public function destroy($id)
    {
        $favorite = Favorite::findOrFail($id);

        // Перевірка, чи належить обране поточному користувачу
        if ($favorite->user_id == auth()->id()) {
            $favorite->delete();
            return redirect()->route('favorites.index')->with('success', 'Рецепт видалено з обраного.');
        }

        return redirect()->route('favorites.index')->with('error', 'Ви не маєте доступу до цього запису.');
    }

    public function store(Request $request)
    {
        Favorite::create([
            'user_id' => auth()->id(),
            'recipe_id' => $request->recipe_id,
        ]);

        return redirect()->back()->with('success', 'Рецепт додано до обраного');
    }
}
