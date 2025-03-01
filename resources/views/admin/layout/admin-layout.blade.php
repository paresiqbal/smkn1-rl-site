<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme-mode="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Metadata Link & Title --}}
    {{-- <link rel="icon" href="{{ asset('assets/img/abdsi-icon.png') }}" type="image/png"> --}}
    <title> @yield('title') | SMK Negeri 1 Rejang Lebong</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>


    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/theme.js'])



    @stack('styles')
</head>

<body class="text-base antialiased font-normal transition-all bg-yellow-50 duration-200">
    <div class="flex flex-col w-full min-h-screen">
        <!-- Sidebar -->
        @include('admin.layout.sidebar')

        <!-- Main Content -->
        <div class="lg:ml-64 pt-10 lg:pt-0 transition-all duration-300">
            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>
    @stack('scripts')
</body>

</html>
