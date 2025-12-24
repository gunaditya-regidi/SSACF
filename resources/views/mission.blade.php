 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Mission - Age Care Foundation</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .foco {
            background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .content-box {
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

        <main style="background-image: url('/images/topper/mmm.jpg'); background-size: cover; background-position: center;">
            <section class="py-20">
                <div class="container mx-auto text-center px-4">
                    <div class="content-box">
                        <h1 class="text-4xl font-bold tracking-tight foco sm:text-6xl">
                            Our Mission
                        </h1>
                        <p class="mt-6 text-lg leading-8 text-white">
                            To empower seniors to live with dignity, comfort, and compassion by providing holistic and person-centered care that addresses their physical, emotional, and spiritual well-being.
                        </p>
                    </div>
                </div>
            </section>
        </main>
        <x-footer />
    </x-app-layout>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
