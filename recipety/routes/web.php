<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/', [RecipeController::class, 'index'])->name('home');

Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

Route::middleware('auth')->group(function () {
    Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');
    Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::put('/recipes/{id}', [RecipeController::class, 'update'])->name('recipes.update');
});

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::middleware('auth')->get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');

Route::middleware('auth')->delete('/favorites/{id}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');

Route::get('/tags', [TagController::class, 'index'])->name('tags.index');

Route::get('/tags/{id}', [TagController::class, 'show'])->name('tags.show');

//Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
