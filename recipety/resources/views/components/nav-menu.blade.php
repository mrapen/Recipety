<ul class="nav">
    <li class="nav-item">
        <x-nav-link :href="route('recipes.index')" :active="request()->routeIs('recipes.index')">
            {{ __('Рецепти') }}
        </x-nav-link>
    </li>
    <li class="nav-item">
        <x-nav-link :href="route('categories.index')" :active="request()->routeIs('categories.index')">
            {{ __('Категорії') }}
        </x-nav-link>
    </li>
</ul>
