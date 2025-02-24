<nav class="bg-gray-100 dark:bg-gray-800">
    <div class="flex">
        <!-- Sidebar Navigation -->
        <nav id="sidebar"
            class="bg-white dark:bg-gray-900 w-64 h-screen fixed inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-50">
            <div class="p-4">
                <!-- Logo -->
                <a href="#" class="text-2xl font-bold text-black dark:text-white mb-4 block">
                    SMKN 1 RL
                </a>
                <!-- Navigation Links -->
                <ul class="space-y-2">
                    <li>
                        <a href="#"
                            class="block p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white">
                            Artikel
                        </a>
                    </li>
                    <li>
                        <button id="profile-toggle"
                            class="w-full flex items-center justify-between p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white focus:outline-none">
                            Profil
                            <svg id="profile-arrow" class="w-4 h-4 transition-transform duration-200"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                            </svg>
                        </button>
                        <div id="profile-menu" class="mt-1 space-y-1 hidden">
                            <a href="#"
                                class="block p-2 pl-6 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white">
                                Visi & Misi
                            </a>
                            <a href="#"
                                class="block p-2 pl-6 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white">
                                Sejarah
                            </a>
                            <a href="#"
                                class="block p-2 pl-6 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white">
                                Fasilitas
                            </a>
                        </div>
                    </li>
                </ul>
                <!-- Authentication Links -->
                <div class="mt-6 border-t border-gray-300 dark:border-gray-700 pt-4">
                    @guest
                        <a href="{{ route('show.login') }}"
                            class="block p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white">
                            Login
                        </a>
                        <a href="{{ route('show.register') }}"
                            class="block p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white">
                            Register
                        </a>
                    @endguest
                    @auth
                        <span class="block p-2 text-yellow-300">
                            {{ Auth::user()->name }}
                        </span>
                        <form action="{{ route('logout') }}" method="POST" class="p-2">
                            @csrf
                            <button type="submit"
                                class="w-full text-left rounded hover:bg-gray-200 dark:hover:bg-gray-700 text-black dark:text-white">
                                Logout
                            </button>
                        </form>
                    @endauth
                </div>
                <!-- Theme Toggle Button -->
                <button id="theme-toggle-sidebar" class="mt-4 p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
                    <svg id="sun-icon-sidebar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                    </svg>
                    <svg id="moon-icon-sidebar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Main Content Area -->
        <div class="flex-1 md:ml-64 transition-all">
            <!-- Toggle Sidebar Button (visible on mobile) -->
            <button id="sidebar-toggle" class="m-4 p-2 bg-blue-500 text-white rounded md:hidden">
                Toggle Sidebar
            </button>
            <div class="p-4">
                <h1 class="text-3xl font-bold text-black dark:text-white">Page Content</h1>
                <p class="mt-2 text-black dark:text-white">
                    This is a page with a sidebar navigation.
                </p>
            </div>
        </div>
    </div>

    <script>
        // Sidebar toggle for mobile
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });

        // Dropdown toggle for Profil on sidebar
        const profileToggle = document.getElementById('profile-toggle');
        const profileMenu = document.getElementById('profile-menu');
        const profileArrow = document.getElementById('profile-arrow');

        profileToggle.addEventListener('click', () => {
            profileMenu.classList.toggle('hidden');
            profileArrow.classList.toggle('rotate-180');
        });

        // Theme toggle logic for the sidebar
        const themeToggleSidebar = document.getElementById('theme-toggle-sidebar');
        const sunIconSidebar = document.getElementById('sun-icon-sidebar');
        const moonIconSidebar = document.getElementById('moon-icon-sidebar');

        document.addEventListener('DOMContentLoaded', () => {
            const currentTheme = localStorage.getItem('theme') || 'light';
            if (currentTheme === 'dark') {
                document.documentElement.classList.add('dark');
                sunIconSidebar.classList.add('hidden');
                moonIconSidebar.classList.remove('hidden');
            }

            themeToggleSidebar.addEventListener('click', () => {
                document.documentElement.classList.toggle('dark');
                sunIconSidebar.classList.toggle('hidden');
                moonIconSidebar.classList.toggle('hidden');
                const theme = document.documentElement.classList.contains('dark') ? 'dark' : 'light';
                localStorage.setItem('theme', theme);
            });
        });
    </script>
</nav>
