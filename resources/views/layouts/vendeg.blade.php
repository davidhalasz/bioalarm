<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script>
            function scrollTo(id) {
                document.getElementById(id).scrollIntoView({behavior: "smooth", block: "start", inline: "nearest"});
            }
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen homePage">
            @include('layouts.vendeg-navbar')
            <main class="tracking-wide leading-relaxed">
                {{ $slot }}
            </main>
        </div>
        @include('layouts.footer2')
        @livewireScripts
    </body>
</html>