<!-- resources/views/recipes/index.blade.php -->

@extends('layouts.app')

@section('content')
    <section class="bg-blur-lt rounded-lg p-4 col-span-2">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Усі рецепти</h2>
        @foreach($recipes as $recipe)
            <x-recipe-card :recipe="$recipe" />
        @endforeach
        {{ $recipes->links() }}
    </section>
@endsection
