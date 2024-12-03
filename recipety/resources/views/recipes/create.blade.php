<!-- resources/views/recipes/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Створити рецепт</h1>
    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-recipe-form :categories="$categories" />
        <button type="submit" class="btn btn-primary">Зберегти рецепт</button>
    </form>
</div>
@endsection
