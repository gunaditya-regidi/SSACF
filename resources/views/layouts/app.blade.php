
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">
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
    <div id="pdf-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center px-4">
        <div class="bg-white rounded-lg shadow-xl w-full max-w-6xl h-5/6 flex flex-col relative">
            <div class="flex justify-between items-center p-4 border-b">
                <h2 id="pdf-modal-title" class="text-xl font-semibold"></h2>
            </div>
            <div id="pdf-viewer" class="flex-grow p-1">

            </div>
             <button id="close-modal-button" class="absolute top-1/2 -right-6 transform -translate-y-1/2 bg-white rounded-full p-1 shadow-lg hover:bg-gray-100 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </div>

    <div id="panorama-modal" class="fixed inset-0 bg-black bg-opacity-75 z-[100] hidden flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-xl w-11/12 md:w-4/5 lg:w-3/4 max-w-6xl h-5/6 flex flex-col">
        <div class="flex justify-between items-center p-4 border-b">
            <h2 id="panorama-modal-title" class="text-xl font-semibold"></h2>
            <button id="close-panorama-modal-button" class="text-gray-500 hover:text-gray-800 text-2xl">&times;</button>
        </div>
        <div id="panorama-viewer" class="flex-grow h-full"></div>
    </div>
</div>


    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.8/pdfobject.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <script>
        $(document).ready(function() {
            const modal = $('#pdf-modal');
            const modalTitle = $('#pdf-modal-title');
            const pdfViewer = $('#pdf-viewer');

            $(document).on('click', '.open-modal-button', function(e) {
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

            const panoramaModal = $('#panorama-modal');
            const panoramaModalTitle = $('#panorama-modal-title');
            let pannellumViewer = null;

            $('.panorama-card').on('click', function() {
                const panoramaSrc = $(this).find('[data-panorama-src]').data('panorama-src');
                const panoramaTitle = $(this).find('[data-panorama-title]').data('panorama-title');

                panoramaModalTitle.text(panoramaTitle);

                if (pannellumViewer) {
                    pannellumViewer.destroy();
                }
                
                pannellumViewer = pannellum.viewer('panorama-viewer', {
                    "type": "equirectangular",
                    "panorama": panoramaSrc,
                    "autoLoad": true,
                    "mouseZoom": true,
                    "showControls": true,
                    "hfov": 120,
                    "compass": true,
                    "autoRotate": -2
                });

                panoramaModal.removeClass('hidden');
            });

            $('#close-panorama-modal-button').on('click', function() {
                panoramaModal.addClass('hidden');
                if (pannellumViewer) {
                    pannellumViewer.destroy();
                    pannellumViewer = null;
                }
            });

            panoramaModal.on('click', function(e) {
                if ($(e.target).is(panoramaModal)) {
                    panoramaModal.addClass('hidden');
                    if (pannellumViewer) {
                        pannellumViewer.destroy();
                        pannellumViewer = null;
                    }
                }
            });
        });
    </script>
     @stack('scripts')
</body>
</html>
