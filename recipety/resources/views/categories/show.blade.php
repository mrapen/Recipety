<!-- resources/views/categories/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>Рецепти в категорії: {{ $category->name }}</h1>

    @if($category->recipes->isEmpty())
        <p>У цій категорії немає рецептів.</p>
    @else
        <div class="row">
            @foreach($category->recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        </div>
    @endif
</div>
@endsection
