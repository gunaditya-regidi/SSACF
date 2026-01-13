<style>
    .fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
        opacity: 0;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .delay-1 { animation-delay: 0.2s; }
    .delay-2 { animation-delay: 0.4s; }
    .delay-3 { animation-delay: 0.6s; }
    .delay-4 { animation-delay: 0.8s; }
</style>

<div>
    <!-- Video for mobile -->
    <div class="block lg:hidden">
        <video autoplay muted loop class="w-full">
            <source src="{{ asset('images/video/bgvideo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Video for desktop -->
    <section class="hidden lg:block relative h-screen bg-black">
        <video autoplay muted loop class="absolute top-0 left-0 w-full h-full object-cover">
            <source src="{{ asset('images/video/bgvideo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <div class="bg-gray-100">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 lg:-mt-16 relative z-20">
            <div class="bg-[linear-gradient(145deg,_#231249,_#3a1a63,_#8a2f7c,_#c95c82)] rounded-2xl shadow-2xl p-6">
                <div class="text-center">
                    <p class="text-gray-300 text-sm sm:text-base text-white font-bold fade-in-up">WELCOME TO</p>
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center mt-2">
                    <div class="text-left fade-in-up delay-1">
                        <img src="{{ asset('images/art/agc.png') }}" alt="Snehasandhya Age Care Foundation" class="my-4">
                    </div>
                    <div class="flex-shrink-0 flex items-center gap-3 mt-4 md:mt-0 fade-in-up delay-4">
                        <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-6 py-2.5 bg-white text-gray-900 font-semibold rounded-full shadow-md hover:bg-gray-200 transition-all duration-300">
                            Our Services
                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" /></svg>
                        </a>
                        <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-6 py-2.5 bg-indigo-600 text-white font-semibold rounded-full shadow-lg hover:bg-indigo-700 transition-all duration-300">
                            More Info
                             <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
