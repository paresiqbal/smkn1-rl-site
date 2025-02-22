@php
    $isOpen = false;
    $isDark = false;
    $activeDropdown = null;
@endphp

<div class="{{ $isDark ? 'dark' : '' }}">
    <nav class="relative border-b-2 border-black bg-white transition-colors dark:border-white dark:bg-zinc-900">
        {{-- Desktop Navigation --}}
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex h-16 items-center justify-between">
                {{-- Logo --}}
                <div class="flex-shrink-0">
                    <a href="#" class="flex items-center gap-2">
                        <div
                            class="h-8 w-8 border-2 border-black bg-orange-400 transition-colors dark:border-white dark:bg-orange-600">
                        </div>
                        <span class="font-mono text-xl font-bold text-black dark:text-white">BRUTAL</span>
                    </a>
                </div>

                {{-- Desktop Menu --}}
                <div class="hidden md:flex md:items-center md:space-x-4">
                    <a href="#" class="neo-button">
                        Home
                    </a>

                    {{-- Products Dropdown --}}
                    <div class="relative">
                        <button onclick="toggleDropdown('products')" class="neo-button flex items-center gap-1">
                            Products
                            <svg
                                class="h-4 w-4 transition-transform {{ $activeDropdown === 'products' ? 'rotate-180' : '' }}">
                                <use xlink:href="#chevron-down" />
                            </svg>
                        </button>
                        @if ($activeDropdown === 'products')
                            <div
                                class="absolute right-0 top-full z-20 mt-2 w-48 border-2 border-black bg-white p-2 dark:border-white dark:bg-zinc-900">
                                <a href="#" class="neo-dropdown-item">
                                    Product 1
                                </a>
                                <a href="#" class="neo-dropdown-item">
                                    Product 2
                                </a>
                                <a href="#" class="neo-dropdown-item">
                                    Product 3
                                </a>
                            </div>
                        @endif
                    </div>

                    {{-- Resources Dropdown --}}
                    <div class="relative">
                        <button onclick="toggleDropdown('resources')" class="neo-button flex items-center gap-1">
                            Resources
                            <svg
                                class="h-4 w-4 transition-transform {{ $activeDropdown === 'resources' ? 'rotate-180' : '' }}">
                                <use xlink:href="#chevron-down" />
                            </svg>
                        </button>
                        @if ($activeDropdown === 'resources')
                            <div
                                class="absolute right-0 top-full z-20 mt-2 w-48 border-2 border-black bg-white p-2 dark:border-white dark:bg-zinc-900">
                                <a href="#" class="neo-dropdown-item">
                                    Blog
                                </a>
                                <a href="#" class="neo-dropdown-item">
                                    Documentation
                                </a>
                                <a href="#" class="neo-dropdown-item">
                                    Tutorials
                                </a>
                            </div>
                        @endif
                    </div>

                    <a href="#" class="neo-button">
                        Contact
                    </a>

                    {{-- Theme Toggle --}}
                    <button onclick="setIsDark(!isDark)" class="neo-button ml-2">
                        @if ($isDark)
                            <svg class="h-4 w-4">
                                <use xlink:href="#sun" />
                            </svg>
                        @else
                            <svg class="h-4 w-4">
                                <use xlink:href="#moon" />
                            </svg>
                        @endif
                    </button>
                </div>

                {{-- Mobile menu button --}}
                <div class="flex md:hidden">
                    <button onclick="setIsOpen(!isOpen)" class="neo-button">
                        @if ($isOpen)
                            <svg class="h-6 w-6">
                                <use xlink:href="#x" />
                            </svg>
                        @else
                            <svg class="h-6 w-6">
                                <use xlink:href="#menu" />
                            </svg>
                        @endif
                    </button>
                </div>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        @if ($isOpen)
            <div class="border-t-2 border-black p-4 md:hidden dark:border-white">
                <div class="flex flex-col space-y-4">
                    <a href="#" class="neo-mobile-item">
                        Home
                    </a>

                    {{-- Mobile Products Dropdown --}}
                    <div>
                        <button onclick="toggleDropdown('mobile-products')"
                            class="neo-mobile-item flex w-full items-center justify-between">
                            Products
                            <svg
                                class="h-4 w-4 transition-transform {{ $activeDropdown === 'mobile-products' ? 'rotate-180' : '' }}">
                                <use xlink:href="#chevron-down" />
                            </svg>
                        </button>
                        @if ($activeDropdown === 'mobile-products')
                            <div class="mt-2 space-y-2 pl-4">
                                <a href="#" class="neo-mobile-subitem">
                                    Product 1
                                </a>
                                <a href="#" class="neo-mobile-subitem">
                                    Product 2
                                </a>
                                <a href="#" class="neo-mobile-subitem">
                                    Product 3
                                </a>
                            </div>
                        @endif
                    </div>

                    {{-- Mobile Resources Dropdown --}}
                    <div>
                        <button onclick="toggleDropdown('mobile-resources')"
                            class="neo-mobile-item flex w-full items-center justify-between">
                            Resources
                            <svg
                                class="h-4 w-4 transition-transform {{ $activeDropdown === 'mobile-resources' ? 'rotate-180' : '' }}">
                                <use xlink:href="#chevron-down" />
                            </svg>
                        </button>
                        @if ($activeDropdown === 'mobile-resources')
                            <div class="mt-2 space-y-2 pl-4">
                                <a href="#" class="neo-mobile-subitem">
                                    Blog
                                </a>
                                <a href="#" class="neo-mobile-subitem">
                                    Documentation
                                </a>
                                <a href="#" class="neo-mobile-subitem">
                                    Tutorials
                                </a>
                            </div>
                        @endif
                    </div>

                    <a href="#" class="neo-mobile-item">
                        Contact
                    </a>

                    {{-- Mobile Theme Toggle --}}
                    <button onclick="setIsDark(!isDark)" class="neo-mobile-item flex items-center gap-2">
                        @if ($isDark)
                            <svg class="h-4 w-4">
                                <use xlink:href="#sun" />
                            </svg>
                            Light Mode
                        @else
                            <svg class="h-4 w-4">
                                <use xlink:href="#moon" />
                            </svg>
                            Dark Mode
                        @endif
                    </button>
                </div>
            </div>
        @endif
    </nav>

    {{-- Overlay for dropdowns --}}
    @if ($activeDropdown)
        <div class="fixed inset-0 z-10" onclick="setActiveDropdown(null)"></div>
    @endif
</div>

<script>
    function toggleDropdown(name) {
        if (@json($activeDropdown) === name) {
            @this.set('activeDropdown', null);
        } else {
            @this.set('activeDropdown', name);
        }
    }

    function setIsOpen(state) {
        @this.set('isOpen', state);
    }

    function setIsDark(state) {
        @this.set('isDark', state);
    }
</script>
