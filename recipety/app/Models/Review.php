<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['recipe_id', 'user_id', 'rating', 'comment'];

    // Зв'язок з рецептом
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }

    // Зв'язок з користувачем
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

