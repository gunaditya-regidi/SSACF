@extends('layouts.app')

@section('title', 'Home Care - Age Care Foundation')
@section('no-splash', true)

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
    .highlight-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 24px;
        display: flex;
        flex-direction: column; /* Stack items vertically */
        align-items: center;   /* Center items horizontally */
        text-align: center;    /* Center text */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .highlight-icon {
        font-size: 40px;
        color: #3b82f6;
        width: 48px;
        text-align: center;
        margin-bottom: 16px; /* Add space below the icon */
    }
    .faq-item[x-data*="open: true"] {
        background-color: #f9fafb;
    }
</style>
@endpush

@section('content')
<div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8 service-page-content">
    <div class="flex flex-wrap lg:flex-nowrap items-center -mx-4">
        <div class="w-full lg:w-1/2 px-4 mb-8 lg:mb-0">
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4">Home Care</h1>
            <p class="text-xl text-gray-600 mb-6">Home care provides seniors with the support they need to live safely and independently in their own homes. Our services range from assistance with daily activities to skilled nursing care, all delivered with compassion and respect.</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>
    
    <!-- Highlight Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 my-16">
        @foreach ($highlightCards as $card)
            <div class="highlight-card">
                <i class="fas {{ $card['icon'] }} highlight-icon"></i>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700">{{ $card['title'] }}</h3>
                    <p class="text-gray-500">{{ $card['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- FAQs -->
    <div class="max-w-4xl mx-auto mt-12">
        <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center">We've Got Answers</h2>
        <div class="space-y-4">
            @foreach ($faqs as $faq)
                <x-faq-item :question="$faq['question']">
                    {{ $faq['answer'] }}
                </x-faq-item>
            @endforeach
        </div>
    </div>
</div>
@endsection
