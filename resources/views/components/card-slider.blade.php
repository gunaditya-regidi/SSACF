@props(['images'])

<div class="bg-white rounded-xl shadow-lg overflow-hidden" x-data="{ activeSlide: 0, slides: {{ json_encode($images) }} }">
    <div class="relative">
        <!-- Slides -->
        <div class="w-full h-80">
            <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index" 
                     x-transition:enter="transition-opacity duration-500 ease-in-out" 
                     x-transition:enter-start="opacity-0" 
                     x-transition:enter-end="opacity-100" 
                     x-transition:leave="transition-opacity duration-500 ease-in-out" 
                     x-transition:leave-start="opacity-100" 
                     x-transition:leave-end="opacity-0" 
                     class="absolute inset-0">
                    <img :src="slide.url" :alt="slide.title" class="w-full h-full object-cover">
                </div>
            </template>
        </div>

        <!-- Prev/Next Arrows -->
        <div class="absolute inset-0 flex items-center justify-between px-4">
            <button @click="activeSlide = (activeSlide - 1 + slides.length) % slides.length" class="bg-black bg-opacity-40 text-white rounded-full p-2 hover:bg-opacity-60 transition-colors focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button @click="activeSlide = (activeSlide + 1) % slides.length" class="bg-black bg-opacity-40 text-white rounded-full p-2 hover:bg-opacity-60 transition-colors focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>
        </div>

        <!-- Dots -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="activeSlide = index" :class="{ 'bg-white scale-110': activeSlide === index, 'bg-white bg-opacity-50': activeSlide !== index }" class="w-2.5 h-2.5 rounded-full hover:bg-white transition-transform focus:outline-none"></button>
            </template>
        </div>
    </div>

    <!-- Content -->
    <div class="p-6">
        <div class="text-center min-h-[80px]">
         <template x-for="(slide, index) in slides" :key="index">
                <div x-show="activeSlide === index"
                     x-transition:enter="transition-opacity duration-300 ease-in-out"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100">
                    <h3 class="font-bold text-xl text-gray-800 mb-2" x-text="slide.title"></h3>
                    <p class="text-gray-600 text-sm" x-text="slide.description"></p>
                </div>
            </template>
        </div>
    </div>
</div>
