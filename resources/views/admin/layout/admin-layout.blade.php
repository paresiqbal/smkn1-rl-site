<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme-mode="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Metadata Link & Title --}}
    {{-- <link rel="icon" href="{{ asset('assets/img/abdsi-icon.png') }}" type="image/png"> --}}
    <title>@yield('title') | SMK Negeri 1 Rejang Lebong</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/theme.js'])

    @stack('styles')
</head>

<body class="text-base antialiased font-normal transition-all bg-yellow-50 duration-200">
    <div class="flex flex-col w-full min-h-screen">
        <div class="flex flex-1 w-full">
            <!-- Sidebar with fixed width -->
            <aside class="hidden lg:block w-64 bg-gray-100 p-4">
                @include('admin.layout.sidebar')
            </aside>

            <!-- Main Content covers remaining space -->
            <main class="flex-1 p-4">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>

</html>
