<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth hover:scroll-auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/svg" href="img/icon_txrangel.svg" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body class="font-sans antialiased bg-gray-900">
        <!-- Page Heading -->
        @include('components.layouts.navigation')
        <!-- Page Content -->
        <main class="bg-gradient-to-t from-gray-900 from-5% via-blue-700 via-50% to-gray-900 to-95%">
            {{ $slot }}
        </main>
        <!-- Footer-->
        @include('components.layouts.footer')
    @livewireScripts
    <script src="https://kit.fontawesome.com/a56b987c24.js" crossorigin="anonymous"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
