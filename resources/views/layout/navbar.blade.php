<nav class="p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold text-black dark:text-white">SMKN 1 RL</a>

        <!-- Links -->
        <div class="hidden md:flex space-x-6">
            <a href="#">Artikel</a>
            <div class="relative group">
                <a href="#" id="showcase-desktop-toggle" class="inline-flex items-center text-black dark:text-white">
                    Profil
                    <svg class="ml-1 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                    </svg>
                </a>
                <div id="showcase-desktop-dropdown" class="absolute hidden shadow-lg mt-1">
                    <a href="#" class="block px-4 py-2 text-black dark:text-white">Visi & Misi</a>
                    <a href="#" class="block px-4 py-2 text-black dark:text-white">Sejarah</a>
                    <a href="#" class="block px-4 py-2 text-black dark:text-white">Fasilitas</a>
                </div>
            </div>


        </div>
        <div class="flex items-center space-x-6">
            <!-- Theme Toggle Button -->
            <button id="theme-toggle">
                <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>
                <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>
            @auth
                <span class="text-yellow-300">{{ Auth::user()->name }}</span>
            @endauth
            <div class="hidden md:flex space-x-6">
                @guest
                    <a href="{{ route('show.login') }}">Login</a>
                    <a href="{{ route('show.register') }}">Register</a>
                @endguest
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @endauth
            </div>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden">
            <svg id="burger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6 text-black dark:text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6 hidden text-black dark:text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden transition duration-300 ">
        <a href="#" class="block p-2 text-black dark:text-white">Artikel</a>
        <div class="relative">
            <button class="block p-2 w-full text-left text-black dark:text-white" id="showcase-mobile-toggle">
                Profil
                <svg class="ml-1 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <div id="showcase-mobile-dropdown" class="hidden shadow-lg">
                <a href="#" class="block px-4 py-2 text-black dark:text-white">Visi & Misi</a>
                <a href="#" class="block px-4 py-2 text-black dark:text-white">Sejarah</a>
                <a href="#" class="block px-4 py-2 text-black dark:text-white">Fasilitas</a>
            </div>
        </div>

        @guest
            <a href="{{ route('show.login') }}" class="block p-2 text-black dark:text-white">Login</a>
            <a href="{{ route('show.register') }}" class="block p-2 text-black dark:text-white">Register</a>
        @endguest

        @auth
            <form action="{{ route('logout') }}" method="POST" class="p-2">
                @csrf
                <button type="submit" class="text-black dark:text-white">Logout</button>
            </form>
        @endauth
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('burger-icon');
        const closeIcon = document.getElementById('close-icon');
        const showcaseMobileToggle = document.getElementById('showcase-mobile-toggle');
        const showcaseMobileDropdown = document.getElementById('showcase-mobile-dropdown');
        const showcaseDesktopToggle = document.getElementById('showcase-desktop-toggle');
        const showcaseDesktopDropdown = document.getElementById('showcase-desktop-dropdown');
        const themeToggle = document.getElementById('theme-toggle');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        showcaseMobileToggle.addEventListener('click', function() {
            showcaseMobileDropdown.classList.toggle('hidden');
        });

        showcaseDesktopToggle.addEventListener('click', function(event) {
            event.preventDefault();
            showcaseDesktopDropdown.classList.toggle('hidden');
        });

        // Close the dropdown if clicked outside
        document.addEventListener('click', function(event) {
            if (!showcaseDesktopToggle.contains(event.target) && !showcaseDesktopDropdown.contains(event.target)) {
                showcaseDesktopDropdown.classList.add('hidden');
            }
        });

        // Theme toggle logic
        document.addEventListener('DOMContentLoaded', function() {
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
</nav>
