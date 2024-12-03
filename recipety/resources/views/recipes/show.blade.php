<!-- resources/views/recipes/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <!-- Заголовок і категорія -->
    <h1>{{ $recipe->title }}</h1>
    <p class="text-muted">Категорія: <a href="{{ route('categories.show', $recipe->category->id) }}">{{ $recipe->category->name }}</a></p>

    <!-- Зображення рецепта -->
    <div class="recipe-image my-4">
        <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="img-fluid">
    </div>

    <!-- Опис рецепта -->
    <div class="description my-4">
        <h3>Опис</h3>
        <p>{{ $recipe->description }}</p>
    </div>

    <!-- Інформація про приготування -->
    <div class="prep-info my-4">
        <p><strong>Час підготовки:</strong> {{ $recipe->prep_time }} хв.</p>
        <p><strong>Час приготування:</strong> {{ $recipe->cook_time }} хв.</p>
    </div>

    <!-- Інгредієнти -->
    <div class="ingredients my-4">
        <h3>Інгредієнти</h3>
        <ul>
            @foreach($recipe->ingredients as $ingredient)
                <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Інструкції приготування -->
    <div class="instructions my-4">
        <h3>Інструкції</h3>
        <p>{{ $recipe->instructions }}</p>
    </div>
</div>
@endsection
