<!-- resources/views/categories/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>Категорії рецептів</h1>
    <div class="list-group my-4">
        @foreach($categories as $category)
            <a href="{{ route('categories.show', $category->id) }}" class="list-group-item list-group-item-action">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
</div>
@endsection
