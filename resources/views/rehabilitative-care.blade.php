@extends('layouts.app')

@section('title', 'Rehabilitative Care - Age Care Foundation')
@section('no-splash', true)

@push('styles')
<style>
    .highlight-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 24px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
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
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4">Rehabilitative Care</h1>
            <p class="text-xl text-blue-600 mb-6">Rehabilitative Care focuses on helping individuals regain, restore, or maintain physical, functional, and cognitive abilities following illness, injury, surgery, or prolonged hospitalisation. It plays a vital role in enabling people to return to their highest possible level of independence, mobility, and confidence.<br> <br>
Rehabilitative care is not just about recovery—it is about reclaiming daily life with dignity, purpose, and hope.
</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>



    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">At Age Care Foundation we recognise that recovery is a gradual and highly individual process, especially for older adults and those with complex medical conditions. Our rehabilitative care model is person-centred, goal-oriented, and interdisciplinary, combining medical oversight with therapeutic interventions and emotional encouragement.

Our team works closely with patients and families to set realistic goals, track progress, and adapt care plans—ensuring safety, motivation, and continuity at every stage of recovery.

</p>
    </div>




    
    <!-- Highlight Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 my-16">
        @foreach ($highlightCards as $card)
            <div class="highlight-card">
                <i class="fa-solid {{ $card['icon'] }} icon"></i>
                <div class="flex-grow">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $card['title'] }}</h3>
                    <p class="text-gray-600 text-sm">{{ $card['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>




    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">Supporting Recovery with Compassion
At Age Care Foundation, rehabilitative care is guided by empathy, patience, and encouragement. We understand that even small gains can be deeply meaningful, especially for older adults striving to regain independence.

Our goal is not only to help individuals recover physical abilities, but to restore confidence, self-worth, and participation in daily life—while supporting families throughout the rehabilitation journey.

Because recovery is not just about healing the body—it is about renewing hope and independence, one step at a time.

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
