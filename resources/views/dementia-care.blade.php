@extends('layouts.app')

@section('title', 'Dementia Care - Age Care Foundation')
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
        text-align: justify;
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
            <h1 class="text-5xl font-extrabold text-blue-900 mb-4 text-justify">Dementia Care</h1>
            <p class="text-xl text-gray-600 mb-6 text-justify">Dementia is one of the major causes of disability and dependency among older people worldwide. It is an umbrella term for several progressive degenerative diseases of the brain cells, affecting memory, thinking, language, communication and behaviour, that interfere significantly with a person’s ability to maintain their activities of daily living. <br><br>
It can be overwhelming, not only for the people who have it, but also for their carers and families. There is often a lack of awareness and understanding of dementia, resulting in stigmatization and barriers to diagnosis and care. Dementia Care is a specialised, compassionate approach to supporting individuals living with dementia and related cognitive disorders, while also caring for the families who walk this journey with them.
</p>
        </div>
        <div class="w-full lg:w-1/2 px-4">
            <x-card-slider :images="$sliderImages" />
        </div>
    </div>
    

    <div class="my-16">
        <p class="text-xl text-gray-700 font-semibold text-justify">At Age Care Foundation, we recognise that behind every diagnosis is a human being with a life story, relationships, emotions, and the need to feel respected and understood. Our approach moves beyond symptom management to embrace person-centred and family-centred care.<br> We focus on preserving remaining abilities, reducing distress, enhancing quality of life, and creating supportive environments that foster familiarity and reassurance.
</p>
    </div>
    


    <!-- Highlight Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 my-16">
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
    <div class="my-16">
        <p class="text-xl text-gray-700 font-semibold text-justify">Collaboration with Dementia India Alliance (DIA), Bengaluru <br>
To strengthen the quality and depth of our dementia care services, Sneha Sandhya Age Care Foundation collaborates with Dementia India Alliance (DIA), Bengaluru, a nationally recognised organisation dedicated to dementia care, advocacy, and education.
Through this collaboration:
<br>•	DIA serves as our knowledge and training partner, supporting evidence-based dementia care practices
<br>•	Our healthcare professionals and caregivers receive specialised training in person-centred dementia care
<br>•	Families benefit from best-practice guidance, caregiver education, and awareness initiatives
<br>•	Our services are aligned with national and global standards in dementia care
<br>This partnership reinforces our commitment to delivering informed, compassionate, and ethically grounded dementia care.

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
