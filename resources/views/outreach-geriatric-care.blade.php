@extends('layouts.app')

@section('title', 'Outreach Geriatric Care - Age Care Foundation')
@section('no-splash', true)

@push('styles')
<style>
    .highlight-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 24px;
        text-align: left;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        height: 100%;
    }
    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .highlight-card .icon {
        font-size: 3rem; /* 48px */
        margin-bottom: 1rem; /* 16px */
        color: #1e3a8a; /* text-blue-900 */
        align-self: center;
    }
    .highlight-card .description {
        text-align: left;
    }
    .faq-item[x-data*="open: true"] {
        background-color: #f9fafb;
    }
</style>
@endpush

@section('content')
<div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8 service-page-content">
    <div class="flex flex-wrap lg:flex-nowrap items-center -mx-4 mb-16">
        <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4">Outreach Geriatric Care</h1>
            <p class="text-xl text-gray-600 mb-6">At Sneha Sandhya Age Care Foundation, our commitment to elderly care extends beyond hospital walls and into the heart of the community. Through our Outreach Geriatric Clinics, we bring essential healthcare services directly to elderly persons who otherwise have limited access to medical care—especially those from underprivileged backgrounds and residents of old age homes.</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>

    <!-- Highlight Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 my-16">
        @foreach ($highlightCards as $card)
            <div class="highlight-card">
                <i class="fas {{ $card['icon'] }} icon"></i>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 text-center mb-4">{{ $card['title'] }}</h3>
                    <p class="text-gray-500 description">{!! $card['description'] !!}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">A Mission of Compassion and Inclusion<br>The Outreach Geriatric Clinics reflect Age Care Foundation’s core mission—to ensure that no elderly person is denied care due to age, poverty, or circumstance. By taking healthcare to where the elderly live, we uphold dignity, compassion, and equity in ageing.<br><br>Through these clinics, Sneha Sandhya Age Care Foundation continues to provide much-needed, life-affirming healthcare to some of the most vulnerable members of society.
</p>
    </div>

    
</div>
@endsection
