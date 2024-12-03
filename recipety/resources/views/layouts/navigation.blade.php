<nav x-data="{ open: false }" class="bg-light border-bottom shadow-sm">
    <div class="container d-flex justify-content-between align-items-center py-2">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="d-flex align-items-center text-decoration-none">
            <x-application-logo class="me-2" style="width: 40px; height: 40px;" />
            <span class="text-dark fw-bold fs-4">Recipety</span>
        </a>

        <!-- Navigation Links -->
        <div class="d-none d-lg-flex align-items-center">
            <x-nav-menu />
        </div>

        <!-- Mobile Menu Toggle -->
        <button class="btn btn-outline-secondary d-lg-none" @click="open = !open">
            <i class="bi bi-list"></i>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" class="d-lg-none bg-white shadow-sm">
        <x-nav-menu class="d-flex flex-column align-items-start py-2 px-3" />
    </div>
</nav>
