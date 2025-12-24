@once
<style>
    .our-services-section {
        position: relative;
        overflow: hidden;
    }
    .our-services-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("{{ Vite::asset('resources/images/background/bglo.jpg') }}");
        background-size: cover;
        background-position: center;
        filter: blur(8px);
        z-index: -1;
    }
    .tab-button-wrapper {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 2rem;
    }
    .tab-button {
        padding: 0.75rem 1.5rem;
        border-radius: 9999px;
        font-weight: 600;
        border: 1px solid rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.6);
        color: #000000;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .tab-button:hover {
        background-color: rgba(255, 255, 255, 0.9);
    }
    .tab-button.active {
        background-color: #ffffff;
        color: #0046d1;
        box-shadow: 0 4px 14px 0 rgba(0, 118, 255, 0.39);
        transform: translateY(-2px);
    }
    .services-content-container {
        position: relative;
        background: linear-gradient(to right, rgba(0, 70, 209, 0.85), rgba(24, 9, 120, 0.85));
        padding: 2.5rem;
        border-radius: 0.75rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        color: #ffffff;
        min-height: 400px; /* Ensures container is visible */
    }
    .service-content-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        align-items: center;
    }
    .cta-button {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        background-color: #ffffff;
        color: #0046d1;
        font-weight: 600;
        border-radius: 9999px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .cta-button:hover {
        background-color: #f0f0f0;
        transform: translateY(-1px);
    }
    .service-image-scroller {
        max-height: 300px;
        overflow: hidden;
        border-radius: 0.5rem;
    }
    .scrolling-image-track {
        display: flex;
        animation: scroll 40s linear infinite;
    }
    .scrolling-image-track img {
        width: 100%;
        height: auto;
        object-fit: cover;
        margin-right: 1rem;
    }
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
</style>
@endonce

@php
$palliativeImages = [
    ['url' => Vite::asset('resources/images/services/pc1.jpeg'), 'alt' => 'A caregiver holding a patient\'s hand.'],
    ['url' => Vite::asset('resources/images/services/pc2.jpeg'), 'alt' => 'Doctor talking to an elderly patient.'],
    ['url' => Vite::asset('resources/images/services/pc3.jpeg'), 'alt' => 'Peaceful room with a comfortable bed.'],
    ['url' => Vite::asset('resources/images/services/pc4.jpeg'), 'alt' => 'A senior person looking out a window.'],
];
$geriatricImages = [
    ['url' => Vite::asset('resources/images/services/gc1.jpeg'), 'alt' => 'Two senior women smiling together.'],
    ['url' => Vite::asset('resources/images/services/gc2.jpeg'), 'alt' => 'Senior man exercising with dumbbells.'],
];
$dementiaImages = [
    ['url' => Vite::asset('resources/images/services/pc1.jpeg'), 'alt' => 'Caregiver assisting a senior woman with a puzzle.'],
    ['url' => Vite::asset('resources/images/services/pc2.jpeg'), 'alt' => 'A human brain model.'],
];
$transitionalImages = [
    ['url' => Vite::asset('resources/images/services/pc3.jpeg'), 'alt' => 'Caregiver helping a senior patient walk at home.'],
    ['url' => Vite::asset('resources/images/services/pc4.jpeg'), 'alt' => 'Doctor reviewing a patient\'s chart with them.'],
];
$respiteImages = [
    ['url' => Vite::asset('resources/images/services/pc1.jpeg'), 'alt' => 'Caregiver reading a book in a peaceful garden.'],
    ['url' => Vite::asset('resources/images/services/pc2.jpeg'), 'alt' => 'A group of seniors enjoying a social activity.'],
];
$rehabilitativeImages = [
    ['url' => Vite::asset('resources/images/services/pc3.jpeg'), 'alt' => 'Physical therapist assisting a senior with leg exercises.'],
    ['url' => Vite::asset('resources/images/services/pc4.jpeg'), 'alt' => 'Senior using parallel bars for support during therapy.'],
];
$hospiceImages = [
    ['url' => Vite::asset('resources/images/services/hc1.jpeg'), 'alt' => 'A nurse providing comfort to a patient in a calm environment.'],
    ['url' => Vite::asset('resources/images/services/hc2.jpeg'), 'alt' => 'A serene and comfortable room designed for peace.'],
];
$homeCareImages = [
    ['url' => Vite::asset('resources/images/services/hc1.jpeg'), 'alt' => 'A caregiver helping a senior with groceries in their kitchen.'],
    ['url' => Vite::asset('resources/images/services/hc2.jpeg'), 'alt' => 'A nurse checking a patient\'s vitals at home.'],
];
$outreachImages = [
    ['url' => Vite::asset('resources/images/services/orc1.jpeg'), 'alt' => 'A mobile medical van in a rural community.'],
    ['url' => Vite::asset('resources/images/services/orc2.jpeg'), 'alt' => 'A doctor conducting a health check-up at a community center.'],
    ['url' => Vite::asset('resources/images/services/orc3.jpeg'), 'alt' => 'Volunteers distributing supplies to elderly community members.'],
    ['url' => Vite::asset('resources/images/services/orc4.jpeg'), 'alt' => 'A health worker talking to a group of seniors outdoors.'],
];
$advocacyImages = [
    ['url' => Vite::asset('resources/images/services/ad1.jpeg'), 'alt' => 'A group of people in a seminar about senior rights.'],
    ['url' => Vite::asset('resources/images/services/ad2.jpeg'), 'alt' => 'A person speaking at a podium during a conference.'],
];
@endphp

<section class="our-services-section py-20 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-extrabold text-black sm:text-5xl tracking-tight">Our Services</h2>
            <p class="mt-4 text-lg text-black">Comprehensive and compassionate care tailored to the unique needs of seniors.</p>
        </div>

        <div x-data="{ activeTab: 'palliative' }" class="max-w-5xl mx-auto">
            <div class="tab-button-wrapper">
                <button @click="activeTab = 'palliative'" :class="{ 'active': activeTab === 'palliative' }" class="tab-button">Palliative Care</button>
                <button @click="activeTab = 'geriatric'" :class="{ 'active': activeTab === 'geriatric' }" class="tab-button">Geriatric Care</button>
                <button @click="activeTab = 'dementia'" :class="{ 'active': activeTab === 'dementia' }" class="tab-button">Dementia Care</button>
                <button @click="activeTab = 'transitional'" :class="{ 'active': activeTab === 'transitional' }" class="tab-button">Transitional Care</button>
                <button @click="activeTab = 'respite'" :class="{ 'active': activeTab === 'respite' }" class="tab-button">Respite Care</button>
                <button @click="activeTab = 'rehabilitative'" :class="{ 'active': activeTab === 'rehabilitative' }" class="tab-button">Rehabilitative Care</button>
                <button @click="activeTab = 'hospice'" :class="{ 'active': activeTab === 'hospice' }" class="tab-button">Hospice Care</button>
                <button @click="activeTab = 'home-care'" :class="{ 'active': activeTab === 'home-care' }" class="tab-button">Home Care</button>
                <button @click="activeTab = 'outreach'" :class="{ 'active': activeTab === 'outreach' }" class="tab-button">Outreach Geriatric Care</button>
                <button @click="activeTab = 'advocacy'" :class="{ 'active': activeTab === 'advocacy' }" class="tab-button">Advocacy & Training</button>
            </div>

            <div class="services-content-container">
                <div x-show="activeTab === 'palliative'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Palliative Care</h3>
                            <p class="text-white mb-6">Specialized medical care for people with serious illnesses, focusing on providing relief from symptoms and stress to improve quality of life for both the patient and the family.</p>
                            <a href="/palliative-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($palliativeImages, $palliativeImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'geriatric'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                     <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Geriatric Care</h3>
                            <p class="text-white mb-6">Helping older adults with multiple health problems. Since 2012, we have been providing geriatric care to underprivileged elders, serving about 1200 persons every month.</p>
                            <a href="/geriatric-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($geriatricImages, $geriatricImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'dementia'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Dementia Care</h3>
                            <p class="text-white mb-6">Specialized support for individuals with memory loss. We focus on creating a safe, comfortable, and engaging environment for patients and their families.</p>
                            <a href="/dementia-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($dementiaImages, $dementiaImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'transitional'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Transitional Care</h3>
                            <p class="text-white mb-6">Coordinating and ensuring continuity of health care as patients transfer between different locations or different levels of care, such as from hospital to home.</p>
                            <a href="/transitional-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($transitionalImages, $transitionalImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'respite'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Respite Care</h3>
                            <p class="text-white mb-6">Providing temporary relief for primary caregivers, enabling them to take a much-needed break from the demands of caring for a sick, aging, or disabled family member.</p>
                            <a href="/respite-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($respiteImages, $respiteImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'rehabilitative'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Rehabilitative Care</h3>
                            <p class="text-white mb-6">Focused on helping patients recover from injury, illness, or surgery. Our goal is to restore function, improve mobility, and enhance overall well-being and independence.</p>
                            <a href="/rehabilitative-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($rehabilitativeImages, $rehabilitativeImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'hospice'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Hospice Care</h3>
                            <p class="text-white mb-6">Providing compassionate, end-of-life care that focuses on comfort, dignity, and quality of life for patients with terminal illnesses, in a serene and supportive environment.</p>
                            <a href="/hospice-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($hospiceImages, $hospiceImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'home-care'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Home Care</h3>
                            <p class="text-white mb-6">Delivering professional and compassionate assistance with daily living activities in the comfort of the patient's own home, promoting independence and well-being.</p>
                            <a href="/home-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($homeCareImages, $homeCareImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'outreach'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Outreach Geriatric Care</h3>
                            <p class="text-white mb-6">Extending our specialized geriatric services to underserved communities through mobile clinics and home visits, ensuring accessible healthcare for all seniors.</p>
                            <a href="/outreach-geriatric-care" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($outreachImages, $outreachImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="activeTab === 'advocacy'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <div class="service-content-grid">
                        <div class="service-text">
                            <h3 class="text-3xl font-bold text-white mb-4">Advocacy & Training</h3>
                            <p class="text-white mb-6">Championing the rights and well-being of the elderly through policy advocacy, community education, and comprehensive training programs for caregivers and healthcare professionals.</p>
                            <a href="/advocacy-and-training" class="cta-button">Learn More</a>
                        </div>
                        <div class="service-image-scroller">
                            <div class="scrolling-image-track">
                                @foreach (array_merge($advocacyImages, $advocacyImages) as $image)
                                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
