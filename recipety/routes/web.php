<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'index'])->name('search.index');

Route::get('/', [RecipeController::class, 'home'])->name('home');

Route::get('/recipes/index', [RecipeController::class, 'index'])->name('recipes.index');

Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
