<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use App\Models\Recipe;
use Illuminate\View\Component;

class RecipeCard extends Component
{
    public $recipe;

    /**
     * Створює новий екземпляр компонента.
     *
     * @param Recipe $recipe
     */
    public function __construct(Recipe $recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * Повертає вигляд компонента.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.recipe-card');
    }
}
