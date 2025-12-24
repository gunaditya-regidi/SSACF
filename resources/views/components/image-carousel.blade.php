@props(['images'])

<div class="relative overflow-hidden rounded-lg shadow-lg" x-data="{ activeSlide: 0, slides: {{ json_encode($images) }} }">
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="activeSlide === index" class="absolute inset-0 transform transition-all duration-500 ease-in-out" x-transition:enter="transition-opacity duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <img :src="slide.url" :alt="slide.title" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 bg-black bg-opacity-50 text-white p-4 w-full">
                <h3 class="font-bold text-lg" x-text="slide.title"></h3>
                <p class="text-sm" x-text="slide.description"></p>
            </div>
        </div>
    </template>

    <!-- Prev/Next Arrows -->
    <div class="absolute inset-0 flex items-center justify-between p-4">
        <button @click="activeSlide = (activeSlide - 1 + slides.length) % slides.length" class="bg-white bg-opacity-50 rounded-full p-2 text-gray-800 hover:bg-opacity-75 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
        </button>
        <button @click="activeSlide = (activeSlide + 1) % slides.length" class="bg-white bg-opacity-50 rounded-full p-2 text-gray-800 hover:bg-opacity-75 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </button>
    </div>

    <!-- Dots -->
    <div class="absolute bottom-2 left-1/2 transform -translate-x-1/2 flex space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="activeSlide = index" :class="{ 'bg-white': activeSlide === index, 'bg-gray-400': activeSlide !== index }" class="w-3 h-3 rounded-full hover:bg-white focus:outline-none"></button>
        </template>
    </div>
</div>
