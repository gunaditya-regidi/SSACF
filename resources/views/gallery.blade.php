@extends('layouts.app')

@section('title', 'Gallery - Age Care Foundation')

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
<style>
    .foco {
        background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    .approach-card {
        background: linear-gradient(to right, rgba(96, 165, 250, 0.6), rgba(59, 130, 246, 0.6));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
        border-radius: 15px;
        color: #fff;
        overflow: hidden;
    }
    .gallery-section { margin-bottom: 4rem; }
    .gallery-section h2 { font-size: 2.25rem; font-weight: 800; margin-bottom: 1.5rem; text-align: center; }
    .card-aspect-ratio { padding-top: 56.25%; position: relative; }
    .card-aspect-ratio img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; }

    .carousel-controls { display: flex; justify-content: center; align-items: center; margin-top: 1.5rem; }
    .slick-arrow { position: static; transform: none; background: #fff; border: 1px solid #d1d5db; border-radius: 9999px; width: 40px; height: 40px; display: flex !important; align-items: center; justify-content: center; box-shadow: 0 1px 3px 0 rgba(0,0,0,0.1); transition: background-color 0.2s, box-shadow 0.2s; margin: 0 8px; }
    .slick-arrow:hover { background: #f3f4f6; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
    .slick-arrow:before { font-family: 'FontAwesome'; font-size: 16px; color: #374151; }
    .slick-prev:before { content: '\f053'; }
    .slick-next:before { content: '\f054'; }
    .slick-disabled { opacity: 0.5; cursor: not-allowed; }

    .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); z-index: 9999; display: flex; align-items: center; justify-content: center; opacity: 0; visibility: hidden; transition: opacity 0.4s ease; }
    .modal-overlay.show { opacity: 1; visibility: visible; }
    .modal-content-container { position: relative; width: 90%; max-width: 900px; }
    .modal-close-button { position: absolute; top: -45px; right: -15px; font-size: 3rem; color: #fff; background: none; border: none; cursor: pointer; font-weight: 200; z-index: 10001; }
    #modal-image-content { width: 100%; height: auto; max-height: 80vh; border-radius: 0.5rem; object-fit: contain; }
    #panorama-container { width: 100%; padding-top: 56.25%; position: relative; border-radius: 0.5rem; overflow: hidden; }
    #video-player-container { width: 100%; padding-top: 56.25%; position: relative; background: #000; border-radius: 0.5rem; overflow: hidden; }
    #video-player-container iframe { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
@endpush

@section('content')
<main class="max-w-screen-2xl mx-auto py-12" style="background-image: url('{{ asset('images/topper/mmm.jpg') }}'); background-size: cover; background-position: center;">
    <section class="gallery-section">
        <h2 class="foco">Image Gallery</h2>
        <p class="mt-2 mb-2 text-center text-lg text-gray-500">
            Institutional and Various Service Activities Photos
        </p>
        <div class="px-12">
            <div class="image-carousel">
                @foreach ($images as $image)
                    <div class="px-3"><div class="approach-card" data-image-src="{{ $image['url'] }}"><div class="card-aspect-ratio"><img src="{{ $image['url'] }}" alt="{{ $image['title'] }}"></div></div></div>
                @endforeach
            </div>
        </div>
        <div class="carousel-controls image-carousel-controls"></div>
    </section>
    <section class="gallery-section">
        <h2 class="foco">360° Virtual Tours</h2>
        <p class="mt-2 mb-2 text-center text-lg text-gray-500">
        360° Institutional Facilities Virtual Tours
        </p>
        <div class="px-12">
            <div class="panorama-carousel">
                @foreach ($panoramas as $pano)
                    <div class="px-3"><div class="approach-card" data-panorama-src="{{ $pano['panorama'] }}"><div class="card-aspect-ratio"><img src="{{ $pano['thumbnail'] }}" alt="{{ $pano['title'] }}"><div class="absolute inset-0 flex items-center justify-content-center bg-black bg-opacity-40"><i class="fas fa-vr-cardboard text-white text-4xl"></i></div></div></div></div>
                @endforeach
            </div>
        </div>
        <div class="carousel-controls panorama-carousel-controls"></div>
    </section>
    <section class="gallery-section">
        <h2 class="foco">Videos</h2>
        
        <div class="px-12">
            <div class="video-carousel">
                @foreach ($videos as $video)
                    <div class="px-3"><div class="approach-card" data-youtube-id="{{ $video['youtube_id'] }}"><div class="card-aspect-ratio"><img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}"><div class="absolute inset-0 flex items-center justify-content-center bg-black bg-opacity-40"><i class="fab fa-youtube text-red-600 text-5xl"></i></div></div></div></div>
                @endforeach
            </div>
        </div>
         <div class="carousel-controls video-carousel-controls"></div>
    </section>
</main>

<div id="image-modal" class="modal-overlay"><div class="modal-content-container"><button class="modal-close-button">&times;</button><img id="modal-image-content" src="" alt=""></div></div>
<div id="panorama-modal" class="modal-overlay"><div class="modal-content-container"><button class="modal-close-button">&times;</button><div id="panorama-container"></div></div></div>
<div id="video-modal" class="modal-overlay"><div class="modal-content-container"><button class="modal-close-button">&times;</button><div id="video-player-container"></div></div></div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
<script>
    $(document).ready(function(){
        let pannellumViewer = null;
        const slickOptions = {
            dots: false, infinite: false, speed: 500, slidesToShow: 3, slidesToScroll: 1, arrows: true, 
            responsive: [
                { breakpoint: 1280, settings: { slidesToShow: 2 } },
                { breakpoint: 768, settings: { slidesToShow: 1 } }
            ]
        };

        $('.image-carousel').slick({...slickOptions, appendArrows: '.image-carousel-controls' });
        $('.panorama-carousel').slick({...slickOptions, appendArrows: '.panorama-carousel-controls' });
        $('.video-carousel').slick({...slickOptions, appendArrows: '.video-carousel-controls' });

        function closeModal() {
            $('.modal-overlay.show').removeClass('show');
            if (pannellumViewer) { setTimeout(() => { pannellumViewer.destroy(); pannellumViewer = null; }, 300); }
            $('#video-player-container').empty();
        }

        $('.image-carousel .approach-card').on('click', function() { 
            $('#modal-image-content').attr('src', $(this).data('image-src')); 
            $('#image-modal').addClass('show'); 
        });

        $('.panorama-carousel .approach-card').on('click', function() { 
            $('#panorama-modal').addClass('show');
            pannellumViewer = pannellum.viewer('panorama-container', { 
                "type": "equirectangular",
                "panorama": $(this).data('panorama-src'),
                "autoLoad": true,
                "autoRotate": -2
            });
        });

        $('.video-carousel .approach-card').on('click', function() {
            const youtubeId = $(this).data('youtube-id');
            $('#video-player-container').html(`<iframe src="https://www.youtube.com/embed/${youtubeId}?autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`);
            $('#video-modal').addClass('show');
        });

        $('.modal-close-button').on('click', closeModal);
        $('.modal-overlay').on('click', function(e) { if ($(e.target).is('.modal-overlay')) { closeModal(); } });
        $(document).on('keydown', function(e) { if (e.key === "Escape") { closeModal(); } });
    });
</script>
@endpush
