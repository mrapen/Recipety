<!-- resources/views/components/recipe-form.blade.php -->
<div class="mb-3">
    <label for="title" class="form-label">Назва рецепту</label>
    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $recipe->title ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Опис</label>
    <textarea name="description" id="description" class="form-control" required>{{ old('description', $recipe->description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="ingredients" class="form-label">Інгредієнти</label>
    <textarea name="ingredients" id="ingredients" class="form-control" required>{{ old('ingredients', $recipe->ingredients ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="instructions" class="form-label">Інструкції</label>
    <textarea name="instructions" id="instructions" class="form-control" required>{{ old('instructions', $recipe->instructions ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Категорія</label>
    <select name="category_id" id="category_id" class="form-control" required>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ (old('category_id') ?? $recipe->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="image" class="form-label">Зображення рецепту</label>
    <input type="file" name="image" id="image" class="form-control">
    @if(isset($recipe) && $recipe->image)
        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="mt-2" style="width: 100px;">
    @endif
</div>
