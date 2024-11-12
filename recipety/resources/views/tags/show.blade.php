<!-- resources/views/tags/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>Рецепти з тегом: {{ $tag->name }}</h1>

    @if($tag->recipes->isEmpty())
        <p>Немає рецептів із цим тегом.</p>
    @else
        <div class="row">
            @foreach($tag->recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        </div>
    @endif
</div>
@endsection
