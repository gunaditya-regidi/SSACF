@extends('layouts.app')

@section('title', 'Palliative Care - Age Care Foundation')
@section('no-splash', true)

@push('styles')
<style>
    .highlight-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 24px;
        display: flex;
        flex-direction: column; /* Ensure vertical alignment */
        align-items: center; /* Center content horizontally */
        text-align: center; /* Center text */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%; /* Make cards of equal height */
    }
    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .highlight-card i {
        font-size: 48px;
        margin-bottom: 16px; /* Space between icon and title */
        color: #3b82f6; /* Blue-500 */
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
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4">Palliative Care</h1>
            <p class="text-xl text-gray-600 mb-6">Palliative care is specialized medical care for people living with a serious illness. It focuses on providing relief from the symptoms and stress of the illness, with the goal of improving quality of life for both the patient and their family.</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>
    
    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">We deliver our palliative care service as a ‘continuum of care’ from the diagnosis to the end of life of the patient, through our out-patient clinics, day care, in-patient care, home care, hospice care, 24/7 telephonic support <br> and reach beyond to the families through our bereavement care. </p>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 my-16">
        @foreach ($highlightCards as $card)
            <div class="highlight-card">
                <i class="{{ $card['icon'] }}"></i>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700">{{ $card['title'] }}</h3>
                    <p class="text-gray-500">{{ $card['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">At Age Care Foundation, palliative care is not merely a medical service—it is a promise to walk alongside patients and their families during some of life’s most challenging moments.</p>
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
