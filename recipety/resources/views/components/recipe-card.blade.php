<!-- resources/views/components/recipe-card.blade.php -->
<div class="card">
    <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title">{{ $recipe->title }}</h5>
        <p class="card-text">{{ Str::limit($recipe->description, 100) }}</p>
        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-primary">Детальніше</a>
        @auth
            <form action="{{ route('favorites.toggle', $recipe->id) }}" method="POST" class="mt-2">
                @csrf
                <button type="submit" class="btn btn-outline-secondary">
                    {{ auth()->user()->favorites->contains($recipe->id) ? 'Видалити з обраного' : 'Додати в обране' }}
                </button>
            </form>
        @endauth
    </div>
</div>
