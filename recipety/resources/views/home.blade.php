<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Секція пошуку рецептів -->
    <div class="search-bar my-4">
        <form action="{{ route('search') }}" method="GET" class="search-form">
            <input type="text" name="query" placeholder="Пошук рецептів..." class="form-control" value="{{ request('query') }}">
            <button type="submit" class="btn btn-primary">Шукати</button>
        </form>
    </div>

    <!-- Останні рецепти -->
    <section class="latest-recipes my-4">
        <h2>Останні рецепти</h2>
        <div class="row">
            @foreach($latestRecipes as $recipe)
                <x-recipe-card :recipe="$recipe" />
            @endforeach
        </div>
    </section>

    <!-- Популярні категорії -->
    <section class="popular-categories my-4">
        <h2>Популярні категорії</h2>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-3">
                    <a href="{{ route('categories.show', $category->id) }}" class="category-link">
                        <div class="category-card">
                            <h5>{{ $category->name }}</h5>
                            <span>Рецептів: {{ $category->recipes_count }}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Популярні теги -->
    <section class="popular-tags my-4">
        <h2>Популярні теги</h2>
        <div class="tag-list">
            @foreach($tags as $tag)
                <a href="{{ route('tags.show', $tag->id) }}" class="badge bg-secondary text-decoration-none">{{ $tag->name }}</a>
            @endforeach
        </div>
    </section>
</div>
@endsection
