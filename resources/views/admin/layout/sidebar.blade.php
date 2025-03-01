<!-- Mobile menu button -->
<button type="button" id="burger-menu"
    class="lg:hidden fixed top-4 left-4 z-50 p-2 rounded-md text-gray-500 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
    onclick="toggleSidebar()">
    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>

<!-- Sidebar -->
<aside id="sidebar"
    class="fixed inset-y-0 left-0 z-40 w-64 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out bg-white dark:bg-zinc-800 border-r border-gray-200 dark:border-gray-700 flex flex-col">
    <!-- Logo -->
    <div class="flex items-center justify-between h-16 px-4 border-b border-gray-200 dark:border-gray-700">
        <a class="flex items-center gap-2" href="/">
            <img src="{{ asset('assets/blud.png') }}" alt="Logo" class="h-8 w-auto">
            <span class="text-xl font-semibold text-gray-800 dark:text-white">SMKN 1 RL</span>
        </a>
        <!-- Mobile close button -->
        <button type="button"
            class="lg:hidden p-2 rounded-md hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
            onclick="toggleSidebar()">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Navigation -->
    <nav class="flex-1 px-2 py-4 space-y-1 overflow-y-auto">
        <!-- Theme Toggle Button -->
        <button
            class="flex w-full items-center px-4 py-2 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-lg group transition-colors duration-200"
            id="theme-toggle">
            <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 mr-3">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
            </svg>
            <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 mr-3 hidden">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
            </svg>
            <span>Toggle Theme</span>
        </button>

        <!-- Dashboard -->
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-lg group transition-colors duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path fill-rule="evenodd"
                    d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z"
                    clip-rule="evenodd" />
            </svg>
            <span>Dashboard</span>
        </a>

        <!-- Article -->
        <div class="space-y-1">
            <button type="button"
                class="flex items-center w-full px-4 gap-3 py-2 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-lg group transition-colors duration-200"
                onclick="this.querySelector('.arrow').classList.toggle('rotate-90'); this.nextElementSibling.classList.toggle('hidden')">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd"
                        d="M2 3.5A1.5 1.5 0 0 1 3.5 2h9A1.5 1.5 0 0 1 14 3.5v11.75A2.75 2.75 0 0 0 16.75 18h-12A2.75 2.75 0 0 1 2 15.25V3.5Zm3.75 7a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5Zm0 3a.75.75 0 0 0 0 1.5h4.5a.75.75 0 0 0 0-1.5h-4.5ZM5 5.75A.75.75 0 0 1 5.75 5h4.5a.75.75 0 0 1 .75.75v2.5a.75.75 0 0 1-.75.75h-4.5A.75.75 0 0 1 5 8.25v-2.5Z"
                        clip-rule="evenodd" />
                    <path d="M16.5 6.5h-1v8.75a1.25 1.25 0 1 0 2.5 0V8a1.5 1.5 0 0 0-1.5-1.5Z" />
                </svg>
                <span>Artikel</span>
                <svg class="arrow w-5 h-5 ml-auto transform transition-transform duration-200" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
            <!-- Submenu -->
            <div class="hidden pl-10 space-y-1">
                <a href="#"
                    class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    Berita
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    Pengumuman
                </a>
                <a href="#"
                    class="flex items-center px-4 py-2 text-sm hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 rounded-lg transition-colors duration-200">
                    Agenda
                </a>
            </div>
        </div>
    </nav>

    <!-- User Profile - Now using mt-auto to push it to the bottom -->
    <div class="mt-auto border-t border-gray-200 dark:border-gray-700">
        <div class="flex items-center p-4">
            <img class="w-8 h-8 rounded-full mr-3" src="https://ui-avatars.com/api/?name=John+Doe" alt="User avatar">
            <div class="flex-1 min-w-0">
                @auth
                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 truncate">
                        {{ Auth::user()->email }}
                    </p>
                @else
                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                        Guest User
                    </p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 truncate">
                        <a href="{{ route('show.login') }}">Login</a> or <a href="{{ route('show.register') }}">Register</a>
                    </p>
                @endauth
            </div>
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="p-2 text-gray-500 hover:text-gray-600 dark:text-gray-400 dark:hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </form>
            @endauth
        </div>
    </div>
</aside>

<!-- Add this script at the end of the file -->
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const burgerMenu = document.getElementById('burger-menu');

        sidebar.classList.toggle('-translate-x-full');

        // Hide/show burger menu based on sidebar state
        if (sidebar.classList.contains('-translate-x-full')) {
            burgerMenu.classList.remove('hidden');
        } else {
            burgerMenu.classList.add('hidden');
        }
    }

    // Theme toggle logic
    document.addEventListener('DOMContentLoaded', function() {
        const themeToggle = document.getElementById('theme-toggle');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');

        const currentTheme = localStorage.getItem('theme') || 'light';

        if (currentTheme === 'dark') {
            document.documentElement.classList.add('dark');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        }

        themeToggle.addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            sunIcon.classList.toggle('hidden');
            moonIcon.classList.toggle('hidden');
            const theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
            localStorage.setItem('theme', theme);
        });
    });
</script>
