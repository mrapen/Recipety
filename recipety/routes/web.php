<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
    Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');
    Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::put('/recipes/{id}', [RecipeController::class, 'update'])->name('recipes.update');
    Route::delete('/recipes/{id}', [RecipeController::class, 'destroy'])->name('recipes.index');
    Route::get('/dashboard', [RecipeController::class, 'home'])->name('dashboard');
});


Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/', [RecipeController::class, 'home'])->name('welcome');

Route::get('/recipes/index', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
