<!-- resources/views/categories/show.blade.php -->
@extends('layouts.app')

@section('content')
<section class="bg-blur-lt rounded-lg p-4 col-span-2">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Рецепти в категорії: {{ $category->name }}</h1>
    @if($category->recipes->isEmpty())
    <div class="bg-white shadow-sm rounded-lg p-4 mb-4">
        <p class="text-gray-600">У цій категорії немає рецептів.</p>
    </div>
    @else
        @foreach($category->recipes as $recipe)
            <x-recipe-card :recipe="$recipe" />
        @endforeach
    @endif
</section>
@endsection
