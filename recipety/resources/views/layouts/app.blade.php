<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/logo.svg') }}" type="image/svg+xml">
    <title>Recipety</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <a href="{{ route('home') }}" class="flex items-center">
                <img src="{{ asset('images/logo.svg') }}" alt="Логотип" class="w-12 h-12">
                <span class="text-2xl font-bold text-gray-700 ml-4">Recipety</span>
            </a>
            <nav class="flex space-x-6">
                <a href="{{ route('recipes.index')}}" class="text-gray-600 hover:text-gray-900">Рецепти</a>
                <a href="{{ route('categories.index')}}" class="text-gray-600 hover:text-gray-900">Категорії</a>
            </nav>
        </div>
    </header>

    <main class="bg-custom bg-blur-sm container mx-auto py-8 px-6">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            &copy; {{ date('Y') }} Recipety. Всі права захищено.
        </div>
    </footer>
</body>
</html>
