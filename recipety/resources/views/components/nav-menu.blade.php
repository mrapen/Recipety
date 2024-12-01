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
    <li class="nav-item">
        <x-nav-link :href="route('favorites.index')" :active="request()->routeIs('favorites.index')">
            {{ __('Улюблені рецепти') }}
        </x-nav-link>
    </li>
    <li class="nav-item">
        <x-nav-link :href="route('tags.index')" :active="request()->routeIs('tags.index')">
            {{ __('Теги') }}
        </x-nav-link>
    </li>
</ul>
