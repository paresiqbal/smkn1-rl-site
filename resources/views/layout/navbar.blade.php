<nav class="bg-yellow-50 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold">SMKN 1 RL</a>

        <!-- Links -->
        <div class="hidden md:flex space-x-6">
            <a href="#">Home</a>
            <a href="#">News</a>
            <div class="relative group">
                <a href="#" id="showcase-desktop-toggle" class="inline-flex items-center">
                    Showcase
                    <svg class="ml-1 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                    </svg>
                </a>
                <div id="showcase-desktop-dropdown" class="absolute hidden bg-yellow-50 shadow-lg mt-1">
                    <a href="#" class="block px-4 py-2">Gallery</a>
                    <a href="#" class="block px-4 py-2">Projects</a>
                    <a href="#" class="block px-4 py-2">Achievements</a>
                </div>
            </div>
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="menu-toggle" class="md:hidden">
            <svg id="burger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6 hidden">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden transition duration-300">
        <a href="#" class="block p-2">Home</a>
        <a href="#" class="block p-2">News</a>
        <div class="relative">
            <button class="block p-2 w-full text-left" id="showcase-mobile-toggle">Showcase <svg class="ml-1 w-4 h-4"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 9l6 6 6-6" />
                </svg></button>
            <div id="showcase-mobile-dropdown" class="hidden bg-yellow-50 shadow-lg">
                <a href="#" class="block px-4 py-2">Gallery</a>
                <a href="#" class="block px-4 py-2">Projects</a>
                <a href="#" class="block px-4 py-2">Achievements</a>
            </div>
        </div>
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
    </script>
</nav>
