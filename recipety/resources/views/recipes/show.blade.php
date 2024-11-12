<!-- resources/views/recipes/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <!-- Заголовок і категорія -->
    <h1>{{ $recipe->title }}</h1>
    <p class="text-muted">Категорія: <a href="{{ route('categories.show', $recipe->category->id) }}">{{ $recipe->category->name }}</a></p>

    <!-- Зображення рецепта -->
    <div class="recipe-image my-4">
        <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="img-fluid">
    </div>

    <!-- Опис рецепта -->
    <div class="description my-4">
        <h3>Опис</h3>
        <p>{{ $recipe->description }}</p>
    </div>

    <!-- Інформація про приготування -->
    <div class="prep-info my-4">
        <p><strong>Час підготовки:</strong> {{ $recipe->prep_time }} хв.</p>
        <p><strong>Час приготування:</strong> {{ $recipe->cook_time }} хв.</p>
    </div>

    <!-- Інгредієнти -->
    <div class="ingredients my-4">
        <h3>Інгредієнти</h3>
        <ul>
            @foreach($recipe->ingredients as $ingredient)
                <li>{{ $ingredient->pivot->quantity }} {{ $ingredient->pivot->unit }} {{ $ingredient->name }}</li>
            @endforeach
        </ul>
    </div>

    <!-- Інструкції приготування -->
    <div class="instructions my-4">
        <h3>Інструкції</h3>
        <p>{{ $recipe->instructions }}</p>
    </div>

    <!-- Теги -->
    <div class="tags my-4">
        <h3>Теги</h3>
        @foreach($recipe->tags as $tag)
            <a href="{{ route('tags.show', $tag->id) }}" class="badge bg-secondary">{{ $tag->name }}</a>
        @endforeach
    </div>

    <!-- Додавання до обраного -->
    <div class="favorite my-4">
        @auth
            <form action="{{ route('favorites.store') }}" method="POST">
                @csrf
                <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                <button type="submit" class="btn btn-outline-primary">Додати до обраного</button>
            </form>
        @else
            <p><a href="{{ route('login') }}">Увійдіть</a>, щоб додати рецепт до обраного.</p>
        @endauth
    </div>

    <!-- Відгуки -->
    <div class="reviews my-4">
        <h3>Відгуки</h3>
        @foreach($recipe->reviews as $review)
            <div class="review mb-3">
                <strong>{{ $review->user->name }}</strong> 
                <span class="text-muted">- {{ $review->rating }} з 5</span>
                <p>{{ $review->comment }}</p>
            </div>
        @endforeach

        <!-- Форма для додавання відгуку -->
        @auth
            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf
                <input type="hidden" name="recipe_id" value="{{ $recipe->id }}">
                <div class="mb-3">
                    <label for="rating" class="form-label">Оцінка</label>
                    <select name="rating" id="rating" class="form-control" required>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Коментар</label>
                    <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Додати відгук</button>
            </form>
        @else
            <p><a href="{{ route('login') }}">Увійдіть</a>, щоб залишити відгук.</p>
        @endauth
    </div>
</div>
@endsection
