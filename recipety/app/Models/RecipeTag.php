<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RecipeTag extends Pivot
{
    protected $table = 'recipe_tag';
    protected $fillable = ['recipe_id', 'tag_id'];

    // Зв'язок з рецептом
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    // Зв'язок з тегом
    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}

