<!-- resources/views/components/recipe-card.blade.php -->
<div class="bg-white shadow-sm rounded-lg p-4 mb-4">
    <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="shadow-sm rounded-lg p-4 mb-4" />
    <div class="shadow-sm rounded-lg p-4 mb-4">
        <h3 class="text-lg font-semibold">{{ $recipe->title }}</h3>
        <p class="text-gray-600">{{ Str::limit($recipe->description, 100) }}</p>
        <a href="{{ route('recipes.show', $recipe->id) }}" class="bg-gray-800 text-white px-4 py-2 rounded-r-lg hover:bg-gray-600">Детальніше</a>
    </div>
</div>
