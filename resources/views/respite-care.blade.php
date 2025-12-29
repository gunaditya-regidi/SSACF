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
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4">Respite Care</h1>
            <p class="text-xl text-gray-600 mb-6">Respite Care is short-term, planned care provided to an elderly or medically dependent individual, giving family caregivers temporary relief from their caregiving responsibilities. 

While caregiving is an act of love and commitment, it can also be physically, emotionally, and mentally demanding. Respite care allows caregivers the time to rest, attend to personal needs, manage work or family commitments, or simply restore their own well-being—knowing that their loved one is safe and well cared for. 
</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>
    



    <div class="text-center my-16">
        <p class="text-xl text-gray-700 font-semibold">At Age Care Foundation we understand that stepping away from caregiving, even briefly, can be difficult for families. Our respite care services are designed to provide continuity, reassurance, and professional care, ensuring that the elder or patient experiences care, comfort, dignity, and familiarity during the caregiver’s absence. <br>
Respite care services are designed to ensure that both the patient and the caregiver feel supported. During the patient’s stay, compassionate nursing care, medical supervision, nutritious meals, and emotional support are provided in a safe, homely environment. Whether for a few days or a few weeks, respite care helps reduce stress and prevent caregiver burnout while ensuring that the loved one continues to receive high-quality, dignified care. It allows caregivers to return refreshed —with renewed energy, patience, and peace of mind —knowing their family member is in good hands.

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
        <p class="text-xl text-gray-700 font-semibold">Caring for the Caregiver
At Age Care Foundation, we recognise that caregivers need care too.<br> Respite care is not a sign of neglect—it is a responsible and compassionate choice that protects the health of caregivers while ensuring consistent, high-quality care for their loved ones.
<br> By offering reliable respite care, we help families sustain caregiving with renewed strength, balance, and peace of mind.
Because when caregivers are supported, care becomes stronger—and compassion endures.

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
