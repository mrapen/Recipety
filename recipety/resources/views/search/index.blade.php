<!-- resources/views/search/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Результати пошуку для: "{{ $query }}"</h1>

    @if($recipes->isEmpty())
        <p>Нічого не знайдено за вашим запитом.</p>
    @else
        <div class="recipe-results">
            @foreach($recipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        </div>

        {{ $recipes->links() }}
    @endif
</div>
@endsection
