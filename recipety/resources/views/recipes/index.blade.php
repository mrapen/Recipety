<!-- resources/views/recipes/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Усі рецепти</h1>
    <div class="recipe-results">
        @foreach($recipes as $recipe)
            <x-recipe-card :recipe="$recipe" />
        @endforeach
    </div>
</div>
@endsection
