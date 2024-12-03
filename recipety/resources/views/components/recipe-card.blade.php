<!-- resources/views/components/recipe-card.blade.php -->
<div class="card">
    <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
    <div class="card-body">
        <h5 class="card-title">{{ $recipe->title }}</h5>
        <p class="card-text">{{ Str::limit($recipe->description, 100) }}</p>
        <a href="{{ route('recipes.show', $recipe->id) }}" class="btn btn-primary">Детальніше</a>
    </div>
</div>
