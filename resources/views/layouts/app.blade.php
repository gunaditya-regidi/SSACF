
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <link rel="icon" href="{{ asset('images/logos/logo.png') }}" type="image/x-icon"/>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
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

    <!-- PDF Modal -->
    <div id="pdf-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-xl w-11/12 md:w-4/5 lg:w-3/4 max-w-6xl h-5/6 flex flex-col">
            <div class="flex justify-between items-center p-4 border-b">
                <h2 id="pdf-modal-title" class="text-xl font-semibold"></h2>
                <button id="close-modal-button" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
            </div>
            <div id="pdf-viewer" class="flex-grow p-4">

            </div>
        </div>
    </div>

    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            const modal = $('#pdf-modal');
            const modalTitle = $('#pdf-modal-title');
            const pdfViewer = $('#pdf-viewer');

            $('.open-modal-button').on('click', function(e) {
                e.preventDefault();
                const url = $(this).data('url');
                const title = $(this).data('title');
                
                // Clear previous PDF
                pdfViewer.html('');

                // Embed the new PDF
                PDFObject.embed(url, pdfViewer, {
                    pdfOpenParams: { 
                        navpanes: 0, 
                        toolbar: 0, 
                        statusbar: 0, 
                        view: "FitH"
                    }
                });

                modalTitle.text(title);
                modal.removeClass('hidden');
            });

            $('#close-modal-button').on('click', function() {
                modal.addClass('hidden');
                 pdfViewer.html('');
            });

            // Also close modal on background click
            modal.on('click', function(e) {
                if ($(e.target).is(modal)) {
                    modal.addClass('hidden');
                    pdfViewer.html('');
                }
            });
        });
    </script>
     @stack('scripts')
</body>
</html>
