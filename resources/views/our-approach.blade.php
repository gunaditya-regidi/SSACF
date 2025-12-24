<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Our Approach - Age Care Foundation</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link rel="icon" href="{{ url('images/logos/logo.png') }}" type="image/x-icon"/>
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Scripts and Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .foco {
            background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .content-.box {
            background: linear-gradient(to right, rgba(0, 70, 209, 0.79), rgba(24, 9, 120, 0.82));
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
            padding: 2rem;
            border-radius: 15px;
            color: #fff;
        }
    </style>

    </head>
    <body class="antialiased">
        <x-app-layout>
            <x-header />

            <main>
                <x-our-approach />
            </main>
        
            <x-footer />
        </x-app-layout>
    </body>
</html>
