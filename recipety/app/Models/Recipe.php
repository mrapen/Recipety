<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'instructions', 'image', 'prep_time', 'cook_time', 'user_id', 'category_id'];

    // Зв'язок з користувачем (автором рецепта)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Зв'язок з категорією
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Зв'язок з інгредієнтами (багато-до-багатьох)
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class)->using(RecipeIngredient::class)->withPivot('quantity', 'unit')->withTimestamps();
    }


    // Зв'язок з тегами (багато-до-багатьох)
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // Зв'язок з відгуками
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

