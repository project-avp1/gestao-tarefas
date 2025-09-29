<nav class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold text-gray-800">
                        📝 Gestão de Tarefas
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        Dashboard
                    </a>

                    <a href="{{ route('tarefas.index') }}"
                        class="nav-link {{ request()->routeIs('tarefas.*') ? 'active' : '' }}">
                        Minhas Tarefas
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Usuário não autenticado (temporário) -->
                <div class="relative">
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-700">Usuário Demo</span>

                        <a href="{{ route('tarefas.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white text-sm px-3 py-1 rounded">
                            Nova Tarefa
                        </a>
                    </div>
                </div>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button onclick="toggleMobileMenu()"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div id="mobile-menu" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('dashboard') }}"
                class="responsive-nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('tarefas.index') }}"
                class="responsive-nav-link {{ request()->routeIs('tarefas.*') ? 'active' : '' }}">
                Minhas Tarefas
            </a>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</nav>

<style>
    /* Componentes de navegação customizados usando CSS */
    .nav-link {
        @apply inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out;
    }

    .nav-link.active {
        @apply border-indigo-400 text-gray-900 focus:outline-none focus:border-indigo-700;
    }

    .nav-link:not(.active) {
        @apply border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300;
    }

    .responsive-nav-link {
        @apply block pl-3 pr-4 py-2 border-l-4 text-base font-medium transition duration-150 ease-in-out;
    }

    .responsive-nav-link.active {
        @apply border-indigo-400 text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700;
    }

    .responsive-nav-link:not(.active) {
        @apply border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300;
    }
</style>