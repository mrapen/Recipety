<!-- resources/views/search/index.blade.php -->

@extends('layouts.app')

@section('content')
<section class="bg-blur-lt rounded-lg p-4 col-span-2">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Результати пошуку для: {{ $query }}</h2>

    @if($recipes->isEmpty())
        <p class="text-gray-600">Нічого не знайдено за вашим запитом.</p>
    @else
        @foreach($recipes as $recipe)
            <x-recipe-card :recipe="$recipe" />
        @endforeach
        {{ $recipes->links() }}
    @endif
</section>
@endsection
