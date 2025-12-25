@php
    $heroImages = [
        ['url' => asset('storage/images/background/bgimg3.jpg'), 'alt' => 'Compassionate senior care in a bright, welcoming environment.'],
        ['url' => asset('storage/images/background/bgimg1.jpg'), 'alt' => 'An elderly woman enjoying a peaceful moment outdoors.'],
        ['url' => asset('storage/images/background/bgimg5.jpg'), 'alt' => 'A caregiver providing gentle support to a senior patient.'],
        ['url' => asset('storage/images/background/bgimg4.jpg'), 'alt' => 'A close-up of a caregiver holding a patient\'s hand, symbolizing trust and support.'],
    ];
@endphp

@extends('layouts.app')

@section('title', 'Age Care Foundation')

@section('content')
    <x-splash-screen />
    <x-stunning-visual-art />

    <div class="my-8">
        <x-dignity-comfort-compassion />
    </div>

    <section class="scrolling-hero-section">
        <div class="scrolling-column">
            <div class="scrolling-images">
                @foreach ($heroImages as $image)
                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                @endforeach
                <!-- Repeated images for continuous scroll -->
                @foreach ($heroImages as $image)
                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                @endforeach
            </div>
        </div>

        <div class="hero-content">
            <div class="hero-headline-wrapper">
                <h2 class="hero-headline">
                    Integrated Center for Geriatric and Palliative Care
                </h2>
            </div>
            <h1 class="hero-subheadline titlenew">12+ Years of</h1>
            <h1 class="hero-subheadline2 titlenew"><span>&#127872;<span> Incredible Service <span>&#127872;<span></h1>
            
            <p class="hero-description">We provide Geriatric care to underprivileged elders and Palliative Care to persons suffering from life limiting illnesses. Our Mission is to deliver high quality Geriatric, Palliative and Dementia care.</p>
            <div class="hero-buttons">
                <a href="#" class="btn-experience">Look into Our Journey</a>
                <a href="#" class="btn-book-call">Know More &rarr;</a>
            </div>
        </div>

        <div class="scrolling-column">
            <div class="scrolling-images reverse-scroll">
                @foreach (array_reverse($heroImages) as $image)
                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                @endforeach
                <!-- Repeated images for continuous scroll -->
                @foreach (array_reverse($heroImages) as $image)
                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                @endforeach
            </div>
        </div>
    </section>

    <main>
        <x-our-services />           
         <x-core-values />

        <x-blog-section :posts="$posts" />
        <x-get-involved />
    </main>

    <div id="pdf-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="relative bg-white rounded-lg shadow-xl w-11/11 md:w-3/4 lg:w-1/2">
            <div class="p-4 border-b">
                <h3 id="pdf-title" class="text-lg font-semibold text-center"></h3>
            </div>
            <div class="p-4">
                <iframe id="pdf-iframe" src="" width="100%" height="500px" frameborder="0"></iframe>
            </div>
            <button id="close-modal-button" class="absolute top-1/2 -right-12 transform -translate-y-1/2 text-white bg-black bg-opacity-50 rounded-full p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
@endsection