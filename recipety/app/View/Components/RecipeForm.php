<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Recipe;

class RecipeForm extends Component
{
    public $categories;
    public $tags;
    public $recipe;

    /**
     * Створює новий екземпляр компонента.
     *
     * @param \Illuminate\Database\Eloquent\Collection $categories
     * @param \Illuminate\Database\Eloquent\Collection $tags
     * @param Recipe|null $recipe
     */
    public function __construct($categories, $tags, $recipe = null)
    {
        $this->categories = $categories;
        $this->tags = $tags;
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
