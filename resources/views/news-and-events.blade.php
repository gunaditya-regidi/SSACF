@extends('layouts.app')

@section('title', 'News and Events')

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/youtube-carousel.css') }}">
<style>
    .news-carousel-container {
        position: relative;
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }
    .news-carousel .news-card-wrapper {
        display: block;
        padding: 0 1rem;
        text-decoration: none;
    }
    .news-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }
    .news-carousel .news-card-wrapper:hover .news-card {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
    }
    .news-card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .news-card-content {
        padding: 1.5rem;
    }
    .news-card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1a202c;
        margin-bottom: 0.5rem;
    }
    .news-card-excerpt {
        color: #4a5568;
        margin-bottom: 1rem;
        font-size: 1rem;
    }
    .news-card-link {
        display: inline-block;
        font-weight: 600;
        color: #0046d9;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .news-carousel .news-card-wrapper:hover .news-card-link {
        color: #0033a0;
    }
    .news-carousel-controls {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }
    .news-carousel-controls button {
        background-color: #0046d9;
        color: white;
        border: none;
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s;
    }
    .news-carousel-controls button:hover {
        background-color: #0033a0;
    }

    /* Newsletter Styles */
    .newsletter-section {
        background-color: #f8f9fa;
        padding: 50px 0;
    }
    .newsletter-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 2rem;
        max-width: 1200px;
        margin: auto;
        padding: 0 2rem;
    }
    .newsletter-item {
        text-align: center;
        cursor: pointer;
        text-decoration: none;
    }
    .newsletter-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .newsletter-item:hover .newsletter-image {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .newsletter-title {
        margin-top: 10px;
        font-weight: 600;
        color: #374151;
        font-size: 1.1rem;
    }
</style>
@endpush

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight mb-6">
            News and Events
        </h2>
        <div class="news-carousel-container">
            <div class="news-carousel">
                @foreach ($posts as $post)
                    <a href="{{ url('/news-and-events/' . $post->slug) }}" class="news-card-wrapper">
                        <div class="news-card">
                            @if(isset($post->image))
                                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="news-card-image">
                            @endif
                            <div class="news-card-content">
                                <h3 class="news-card-title">{{ $post->title }}</h3>
                                <p class="news-card-excerpt">{!! Str::limit(strip_tags($post->content), 150) !!}</p>
                                <span class="news-card-link">Read More &rarr;</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="news-carousel-controls"></div>
        </div>
    </div>
</div>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container mx-auto px-4 text-center mb-12">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Our Newsletters</h2>
        <p class="mt-4 text-lg text-gray-500">Stay updated with our latest newsletters. Click to read.</p>
    </div>
    <div class="newsletter-grid">
        @php
            $image_files = collect(File::files(public_path('newsletters')))->filter(function ($file) {
                return in_array(strtolower($file->getExtension()), ['png', 'jpg', 'jpeg']);
            })->sortByDesc(function ($file) {
                return $file->getFilename();
            });

            $pdf_files = collect(File::files(public_path('newsletters')))->filter(function ($file) {
                return strtolower($file->getExtension()) === 'pdf';
            })->keyBy(function ($file) {
                return strtolower($file->getFilenameWithoutExtension());
            });
        @endphp

        @foreach ($image_files as $image)
            @php
                $image_name = strtolower($image->getFilenameWithoutExtension());
                $pdf = $pdf_files->get($image_name);
            @endphp
            @if ($pdf)
                <a href="{{ asset('newsletters/' . $pdf->getFilename()) }}" target="_blank" class="newsletter-item">
                    <img src="{{ asset('newsletters/' . $image->getFilename()) }}" alt="{{ $image->getFilenameWithoutExtension() }}" class="newsletter-image">
                    <div class="newsletter-title">{{ $image->getFilenameWithoutExtension() }}</div>
                </a>
            @endif
        @endforeach
    </div>
</section>

<section class="youtube-carousel-section">
    @php
        $videos = [
            ['id' => 'cOhqVWwDVNs', 'title' => 'Dr Vidya Viswanath\'s talk at Palliative Care Congress in Vatican', 'credits' => 'Pallium India'],
            ['id' => 'r8lBLUSFLEE', 'title' => 'A Caregiver\'s Prayer', 'credits' => 'jeanie powell'],
            ['id' => '9U9X4Ssb_qY', 'title' => 'Help without expectation', 'credits' => 'Leonz P'],
            ['id' => 'QglpwO8POvI', 'title' => 'A journey Let\'s Talk Series', 'credits' => 'milfordcarecentre'],
            ['id' => 'lDHhg76tMHc', 'title' => 'Palliative Care: YOU Are a BRIDGE', 'credits' => 'Get Palliative Care'],
            ['id' => 'JzT6IRx_okk', 'title' => '#LastWords', 'credits' => 'Last Words'],
            ['id' => '9M2rIY__K0A', 'title' => 'a few days more (trailer)', 'credits' => 'Oorjaa-Power To Change']
        ];
    @endphp
    <x-youtube-carousel :videos="$videos" />
</section>

<x-faq-section />

@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $('.youtube-carousel').slick({
            dots: false, 
            infinite: false, 
            speed: 500, 
            slidesToShow: 3, 
            slidesToScroll: 1, 
            arrows: true, 
            appendArrows: $('.youtube-carousel-controls'),
            responsive: [
                { 
                    breakpoint: 1280, 
                    settings: { slidesToShow: 2 } 
                },
                { 
                    breakpoint: 768, 
                    settings: { slidesToShow: 1 } 
                }
            ]
        });

        $('.news-carousel').slick({
            dots: false,
            infinite: false,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            appendArrows: $('.news-carousel-controls'),
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>
@endpush
