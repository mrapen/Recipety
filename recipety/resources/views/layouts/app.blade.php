<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipety</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4DFzPnlx9+urEa6m3QtxKg3z8vM5lDLid9O6hc3QdN5sHxyRDwK8LBZX5nEhEPOd" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-4DFzPnlx9+urEa6m3QtxKg3z8vM5lDLid9O6hc3QdN5sHxyRDwK8LBZX5nEhEPOd" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
</head>
<body class="bg-light text-dark">
    <!-- Header -->
    <header>
        @include('layouts.navigation')
    </header>

    <!-- Main Content -->
    <main class="container py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-3 bg-dark text-light">
        <p>&copy; {{ date('Y') }} Recipety. Всі права захищено.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-aGhsWYOpr45/BMQh0zRH2FmO3/j8lmJdkMWHMPm7WQNuCUptNe/XfM8CIY6QOX9D" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
