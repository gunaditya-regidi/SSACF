@extends('layouts.app')

@section('title', 'Geriatric Care - Age Care Foundation')
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
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4">Geriatric Care</h1>
            <p class="text-xl text-gray-600 mb-6">Geriatric Care is a specialised branch of healthcare dedicated to promoting the health, independence, dignity, and overall well-being of older adults. As people age, their needs often become complex—marked by multiple medical conditions like Organ failure, Cancer, Heart disease, Stroke, Dementia etc., reduced mobility, cognitive changes, emotional vulnerabilities, and a growing need for support in daily living.
Geriatric care addresses these challenges through a holistic, person-centred approach that looks beyond illness to the individual as a whole.
</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>

    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">We understand that ageing is not merely a medical journey but a life transition that affects individuals and families alike. Our integrated geriatric care model combines preventive, curative, rehabilitative, and supportive services, <br>delivered by a multidisciplinary team of geriatricians, nurses, physiotherapists, counsellors, and trained caregivers.</p>
    </div>
    
    <!-- Highlight Cards -->
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
        <p class="text-xl text-gray-700 font-semibold">A Commitment to Dignity in Ageing <br>
At Age Care Foundation, we believe that ageing deserves care, respect, and compassion—not neglect or isolation. Our geriatric care services are designed not only to extend life, but to enhance its quality—supporting elders to live their later years with reassurance, dignity, and a sense of being valued. Because caring for the elderly is not just a service—it is a responsibility, a privilege, and a reflection of our shared humanity.
</p>
    </div>
    
    <!-- FAQs -->
    <div class="max-w-4xl mx-auto mt-12">
        <h2 class="text-3xl font-bold text-blue-800 mb-6 text-center">We've Got Answers</h2>
        <div class="space-y-4">
            @foreach ($faqs as $faq)
                <x-faq-item :question="$faq['question']">
                    {!! $faq['answer'] !!}
                </x-faq-item>
            @endforeach
        </div>
    </div>
</div>
@endsection
