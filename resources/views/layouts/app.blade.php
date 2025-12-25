
           <!DOCTYPE html>
           <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
           <head>
               <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>@yield('title', config('app.name', 'Laravel'))</title>
               <link rel="icon" href="{{ asset('storage/images/logos/logo.png') }}" type="image/x-icon"/>
               <link rel="preconnect" href="https://fonts.bunny.net">
               <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
               <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
              <!-- Font Awesome for social icons -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
              <!-- Slick Carousel CSS -->
              <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
              <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
              <script src="https://cdn.tailwindcss.com"></script>
              @vite(['resources/css/app.css', 'resources/js/app.js'])
              @stack('styles')
          </head>
          <body class="font-sans antialiased">
              <div class="min-h-screen bg-gray-100">
                  <x-header />
                  <main>
                      @yield('content')
                  </main>
                  <x-footer />
              </div>
              @stack('scripts')
          </body>
          </html>
