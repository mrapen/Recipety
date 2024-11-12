<!-- resources/views/recipes/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Редагувати рецепт</h1>
    <form action="{{ route('recipes.update', $recipe->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-recipe-form :categories="$categories" :tags="$tags" :recipe="$recipe" />
        <button type="submit" class="btn btn-primary">Оновити рецепт</button>
    </form>
</div>
@endsection
