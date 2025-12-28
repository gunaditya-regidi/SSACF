
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Our Team - Age Care Foundation</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Favicon -->
        <link rel="icon" href="{{ asset('images/logos/logo.png') }}" type="image/x-icon"/>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Scripts and Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .team-section {
                background: linear-gradient(to right, rgba(0, 70, 209, 0.05), rgba(0, 46, 138, 0.05));
                padding: 4rem 2rem;
                margin-bottom: 2rem;
                border-radius: 20px;
                box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.05);
            }
            .description-card {
                background-color: white;
                border-radius: 1rem;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
                padding: 1.5rem;
            }
        </style>

    </head>
    <body class="antialiased bg-gray-50">
        <x-app-layout>
            <x-header />

            <main style="background-image: url('{{ asset('images/background/greenwv.jpg') }}'); background-size: cover; background-attachment: fixed;">
                <div class="py-16">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white/90 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-2xl">
                            <div class="p-8 text-gray-900">
                           
                                <div class="team-section text-center">
                                    <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/CP.png') }}" alt="Chief Patron">
                                    <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/comM.png') }}" alt="Committee Members">
                                    <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/bt.png') }}" alt="Committee Members">
                                    <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/adhc.png') }}" alt="Committee Members">
                               
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        
            <x-footer />
        </x-app-layout>
    </body>
</html>
