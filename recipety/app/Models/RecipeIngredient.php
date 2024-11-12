<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RecipeIngredient extends Pivot
{
    protected $table = 'recipe_ingredient';
    protected $fillable = ['recipe_id', 'ingredient_id', 'quantity', 'unit'];

    // Зв'язок з рецептом
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    // Зв'язок з інгредієнтом
    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }
}

