<nav class="bg-yellow-50 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold">SMKN 1 RL</a>

        <!-- Links -->
        <div class="hidden md:flex space-x-6">
            <a href="#">Home</a>
            <a href="#">News</a>
            <a href="#">Showcase</a>
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
        <a href="#" class="block p-2">Showcase</a>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('burger-icon');
        const closeIcon = document.getElementById('close-icon');

        menuToggle.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            burgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</nav>
