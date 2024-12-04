@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Ліва колонка -->
        <section class="bg-blur-lt rounded-lg p-4 col-span-2">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Останні рецепти</h2>
            @foreach ($latestRecipes as $recipe)
                <a href="{{ route('recipes.show', $recipe->id) }}">
                    <x-recipe-card :recipe="$recipe"/>
                </a>
            @endforeach
        </section>

        <!-- Права колонка -->
        <aside class="col-span-1">
            <!-- Пошук -->
            <div class="bg-blur-lt rounded-lg p-4 mb-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Пошук рецептів</h2>
                <form action="{{ route('search.index') }}" method="GET" class="flex">
                    <input type="text" name="search" placeholder="Пошук рецептів..." class="w-full border rounded-l-lg px-4 py-2 focus:outline-none">
                    <button type="submit" class="bg-gray-800 text-white px-4 py-2 rounded-r-lg hover:bg-blue-600">Шукати</button>
                </form>
            </div>

            <!-- Популярні категорії -->
            <div class="bg-blur-lt rounded-lg p-4">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Популярні категорії</h2>
                <div class="space-y-2">
                    @foreach ($categories as $category)
                        <a href="{{ route('categories.show', $category->id) }}" class="block bg-white shadow-sm rounded-lg p-4 text-gray-700 hover:bg-gray-100">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">{{ $category->name }}</h3>
                            <span>Рецептів: {{ $category->recipes_count }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </aside>
    </div>
@endsection
