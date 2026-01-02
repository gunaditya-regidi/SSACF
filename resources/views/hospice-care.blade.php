@extends('layouts.app')

@section('title', 'Hospice Care - Age Care Foundation')
@section('no-splash', true)

@push('styles')
<style>
    .highlight-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        padding: 24px;
        text-align: justify;
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
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4 text-justify">Hospice Care</h1>
            <p class="text-xl text-gray-600 mb-6 text-justify">Hospice Care is a specialised form of compassionate care for individuals living with advanced, life-limiting illnesses, where the focus shifts from cure to care, comfort, dignity, and quality of life. It supports people in the final phase of life by addressing pain and distress
Hospice and palliative care both offer relief from pain and other symptoms of a serious illness. 
<br><br>
Hospice care is grounded in a simple belief:<br>
every person deserves to live their final days free from pain, fear, and loneliness. Hospice care is not about giving up—it is about choosing care that affirms life, meaning, and human connection, even when cure is no longer possible. It is appropriate for persons whose estimated life expectancy is six months or less. Hospice care can be provided at hospital, hospice, or patient's home.
</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>
    
    <div class="my-16">
        <p class="text-xl text-gray-700 font-semibold text-justify">At Age Care Foundation We recognise that the end of life is not just a medical event, but a deeply personal journey affecting patients, families, and loved ones. Our hospice care approach is holistic and person-centred, addressing physical symptoms as well as emotional, social, and spiritual concerns.<br><br>Our multidisciplinary team walks alongside patients and families with sensitivity, honesty, and compassion—supporting informed decision-making, comfort, and peace at every step.
</p>
    </div>
    
    <!-- Highlight Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 my-16">
        @foreach ($highlightCards as $card)
            <div class="highlight-card">
                <i class="fas {{ $card['icon'] }} icon"></i>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700">{{ $card['title'] }}</h3>
                    <p class="text-gray-500">{{ $card['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="my-16">
        <p class="text-xl text-gray-700 font-semibold text-justify">Honouring Life Until the Very End <br>
At Age Care Foundation, hospice care is about living fully until the last moment—surrounded by compassion, comfort, and respect. We strive to ensure that no one faces the end of life alone, in pain, or without dignity.<br><br>Because while we may not always be able to add days to life, we can always add life to days.
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
