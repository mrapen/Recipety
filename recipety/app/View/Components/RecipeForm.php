<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Recipe;

class RecipeForm extends Component
{
    public $categories;
    public $recipe;

    /**
     * Створює новий екземпляр компонента.
     *
     * @param \Illuminate\Database\Eloquent\Collection $categories
     * @param Recipe|null $recipe
     */
    public function __construct($categories, $recipe = null)
    {
        $this->categories = $categories;
        $this->recipe = $recipe;
    }

    /**
     * Повертає вигляд компонента.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.recipe-form');
    }
}
