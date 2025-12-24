@extends('layouts.app')

@section('title', 'Respite Care - Age Care Foundation')
@section('no-splash', true)

@push('styles')
<style>
    .highlight-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 24px;
        display: flex;
        align-items: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .highlight-card img {
        height: 48px;
        width: 48px;
        margin-right: 16px;
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
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4">Respite Care</h1>
            <p class="text-xl text-gray-600 mb-6">Respite care provides temporary relief for primary caregivers, allowing them to take a much-needed break from the demands of caring for a loved one. We offer a safe and supportive environment for seniors while their caregivers rest and recharge.</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>
    
    <!-- Highlight Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 my-16">
        @foreach ($highlightCards as $card)
            <div class="highlight-card">
                <img src="{{ $card['icon'] }}" alt="{{ $card['alt'] }}">
                <div>
                    <h3 class="text-xl font-semibold text-gray-700">{{ $card['title'] }}</h3>
                    <p class="text-gray-500">{{ $card['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- FAQs -->
    <div class="max-w-4xl mx-auto mt-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">We've Got Answers</h2>
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
