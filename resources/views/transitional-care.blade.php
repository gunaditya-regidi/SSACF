@extends('layouts.app')

@section('title', 'Transitional Care - Age Care Foundation')
@section('no-splash', true)

@push('styles')
<style>
    .highlight-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }
    .highlight-card i {
        color: #3b82f6; /* blue-500 */
        margin-bottom: 1rem;
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
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4">Transitional Care</h1>
            <p class="text-xl text-gray-600 mb-6">Transitional care is an essential link in the healing journey and refers to coordinated, short-term healthcare support provided to individuals as they move from one care setting to another—most commonly from hospital to home, or from acute treatment to long-term or rehabilitative care. It focuses on restoring confidence, mobility, and independence, while helping patients and their families adapt to new routines after illness, surgery, or prolonged hospitalization.

These transition periods are often marked by vulnerability, confusion, and increased risk of complications, especially for older adults and those with complex medical needs. This compassionate, well-coordinated approach not only reduces the chances of readmission but also enhances the overall quality of life —helping patients heal with dignity, care, and confidence.
</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>
    


    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">At Age Care Foundation, transitional care is designed to ensure that this critical phase is safe, supported, and seamless, preventing avoidable readmissions and helping individuals regain stability, confidence, and independence. We recognise that discharge from a hospital does not mean recovery is complete.<br> Many patients require continued medical supervision, nursing care, rehabilitation, medication management, and emotional support during the weeks that follow.</p>
    </div>
    

    <!-- Highlight Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 my-16">
        @foreach ($highlightCards as $card)
            <div class="highlight-card">
                <i class="fas {{ $card['fa_icon'] }} fa-3x"></i>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mt-4">{{ $card['title'] }}</h3>
                    <p class="text-gray-500">{{ $card['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">A Bridge to Safer Recovery
*At Age Care Foundation, transitional care is more than a service—it is a bridge between illness and recovery, between hospital and home. By providing structured support during this crucial phase, we help individuals heal safely, reduce avoidable hospital readmissions, and empower families with confidence and clarity.
<br>Because recovery does not end at discharge—it begins there, with the right care, at the right time, in the right place.

</p>
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
