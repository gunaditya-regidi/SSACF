@extends('layouts.app')

@section('title', 'Our Facilities')

@section('content')
    <main style="background-image: url('{{ asset('images/background/greenwv.jpg') }}'); background-size: cover; background-attachment: fixed;">
        <div class="py-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white/90 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-2xl">
                    <div class="p-8 text-gray-900">
                        <h1 class="text-4xl font-bold text-center text-blue-900 my-8">THE FACILITY</h1>
                        <h2 class="text-2xl font-semibold text-center text-blue-800 mb-8">INTEGRATED GERIATRIC AND PALLIATIVE HEALTH CARE CENTRE</h2>
                        <x-image-carousel :images="$topImages" direction="left-to-right" />
                        <br><br>
                        <p class="text-lg text-gray-700 mb-6">
                            Age Care Foundation's endeavour to make available specialised geriatric and palliative health care services to the elderly and the seriously ill received a big fillip when the Free Polio Surgical and Research Foundation, Visakhapatnam provided one acre of land in Visakhapatnam to establish and run a fully integrated centre for Geriatric and Palliative Care, the first of its kind in Andhra Pradesh. This will open new vistas of care and scale up Age Care Foundation's services manyfold.
                        </p>

                        <p class="text-lg text-gray-700 mb-6">
                            The bhoomipooja for the project was performed on 7th Aug 2022 and construction started in Dec 2022. The project work is completed and inpatient admissions to the healthcare facility commenced on 22nd September 2025. The gigantic task would not have been possible without the wholehearted, kind and generous philanthropic support from many corporate, institutional and individual donors, backed by the committed team of age care foundation.
                        </p>

                        <h3 class="text-2xl font-bold text-center text-blue-900 my-8">Some of the Key Highlights of the project are:</h3>
                        <ul class="list-disc list-inside text-lg text-gray-700 mb-6 space-y-2">
                            <li>88 patient rooms with 120 + bed capacity</li>
                            <li>Spacious and well ventilated inpatient rooms.</li>
                            <li>Dedicated blocks for outpatient care, physiotherapy, diagnostics.</li>
                            <li>3,200 Sq.ft of out-patient block with consultation chambers, counseling rooms and pharmacy</li>
                            <li>Training centre for healthcare providers, caregivers, volunteers, and social workers</li>
                            <li>Auditorium for seminars and also for recreation of patients and their family members</li>
                            <li>Dining hall, activity room and Library</li>
                            <li>Social spaces for patients to meet family members and visitors</li>
                            <li>Accommodation for nursing staff and caregivers</li>
                            <li>Equipped with 100kv solar power under green initiative.</li>
                        </ul>

                        <p class="text-lg text-gray-700 mb-6">
                            In a world where longevity is increasing but quality of life often declines with age and chronic illnesses, Age Care Foundation has taken this initiative to provide holistic, patient/family-centered approach, focusing on complex needs, optimizing quality of life, managing severe symptoms (pain, breathlessness, fatigue), addressing psychosocial/spiritual issues, using multidisciplinary teams.
                        </p>

                        <p class="text-lg text-gray-700 mb-6">
                            Conceived with the belief that health care should be provided with “compassion and dignity,” the hospital provides a continuum of care that integrates geriatric medicine and palliative care under one roof. It is designed not merely as a healthcare facility but as a sanctuary of healing, where medical excellence meets human warmth.
                        </p>

                        <p class="text-lg text-gray-700 mb-6">
                            The center provides care with skill, compassion, and dignity, delivering high-quality, respectful support that values the individual's worth, independence, and choices. It's about seeing the person, not just the condition, fostering a sense of safety and respect through attentive actions, active listening, and tailored approaches.
                        </p>

                        <hr class="my-8 border-gray-300">

                        <div class="my-12">
                        <h3 class="text-2xl font-bold text-center text-blue-900 my-4">Age Care Foundation is eternally grateful to <br>Free Polio Surgical and Research Foundation, <br> Corporates, Institutional & Individual Donors for their generous support.</h3>
                            
                            <div class="flex justify-center items-center space-x-8 mb-6">
                                <img src="{{ asset('images/gallery/fa1.jpeg') }}" alt="Facility Image 1" class="w-1/2 md:w-1/3 rounded-lg shadow-lg">
                                <img src="{{ asset('images/gallery/fa2.jpeg') }}" alt="Facility Image 2" class="w-1/2 md:w-1/3 rounded-lg shadow-lg">
                            </div>
                         
                        </div>

                        <hr class="my-8 border-gray-300">

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
