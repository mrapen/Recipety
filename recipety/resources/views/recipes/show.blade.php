<!-- resources/views/recipes/show.blade.php -->
@extends('layouts.app')

@section('content')
<section class="bg-blur-lt rounded-lg p-4 col-span-2">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">{{ $recipe->title }}</h1>
    <p class="text-gray-600">Категорія: <a href="{{ route('categories.show', $recipe->category->id) }}">{{ $recipe->category->name }}</a></p>

    <!-- Зображення рецепта -->
    <div class="bg-white shadow-sm rounded-lg p-4 mb-4">
        <img src="{{ asset($recipe->image) }}" alt="{{ $recipe->title }}"class="shadow-sm rounded-lg p-4 mb-4 w-1/2">
    </div>

    <!-- Опис рецепта -->
    <div class="bg-white shadow-sm rounded-lg p-4 mb-4">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Опис</h3>
        <p class="text-gray-600">{{ $recipe->description }}</p>
    </div>

    <!-- Інформація про приготування -->
    <div class="bg-white shadow-sm rounded-lg p-4 mb-4">
        <p class="text-gray-600"><strong>Час підготовки:</strong> {{ $recipe->prep_time }} хв.</p>
        <p class="text-gray-600"><strong>Час приготування:</strong> {{ $recipe->cook_time }} хв.</p>
    </div>

    <!-- Інгредієнти -->
    <div class="bg-white shadow-sm rounded-lg p-4 mb-4">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Інгредієнти</h3>
        <ul>
            @foreach($recipe->ingredients as $ingredient)
                <li  class="text-gray-600">{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Інструкції приготування -->
    <div class="bg-white shadow-sm rounded-lg p-4 mb-4">
        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Інструкції</h3>
        <p class="text-gray-600">{{ $recipe->instructions }}</p>
    </div>
</section>
@endsection
