<!-- resources/views/favorites/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4">
    <h1>Улюблені рецепти</h1>

    @if($favorites->isEmpty())
        <p>У вас ще немає улюблених рецептів. <a href="{{ route('categories.index') }}">Перегляньте рецепти</a> та додайте улюблені.</p>
    @else
        <div class="row">
            @foreach($favorites as $favorite)
                @php
                    $recipe = $favorite->recipe;
                @endphp
                <div class="col-md-4 my-3">
                    <div class="card">
                        <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->title }}</h5>
                            <p class="card-text">{{ Str::limit($recipe->description, 100) }}</p>
                            <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-primary">Детальніше</a>
                            <form action="{{ route('favorites.destroy', $favorite->id) }}" method="POST" class="mt-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Видалити з обраного</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
