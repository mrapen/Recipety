<!-- resources/views/categories/index.blade.php -->
@extends('layouts.app')

@section('content')
<section class="bg-blur-lt rounded-lg p-4 col-span-2">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Категорії рецептів</h1>
    @foreach($categories as $category)
        <a href="{{ route('categories.show', $category->id) }}" class="list-group-item list-group-item-action">
            {{ $category->name }}
        </a>
    @endforeach
</section>
@endsection
