<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Our Journey - Age Care Foundation</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link rel="icon" href="{{ Vite::asset('resources/images/logos/logo.png') }}" type="image/x-icon"/>
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Scripts and Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <x-app-layout>
            <x-header />

            <main>
                <x-our-journey-content />
            </main>
        
            <x-footer />
        </x-app-layout>
    </body>
</html>
