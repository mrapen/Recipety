<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserMenu extends Component
{
    public $username;

    /**
     * Create a new component instance.
     */
    public function __construct($username = 'User')
    {
        $this->username = $username;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-menu');
    }
}
