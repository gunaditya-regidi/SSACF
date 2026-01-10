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
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-center md:text-left mb-4  md:mb-0">
                    <p class="text-gray-300 text-sm sm:text-base mt-1 text-white">Welcome To</p>
                    <h1 class="text-2xl md:text-2xl text-white"><span class="font-dancing-script italic font-bold">Sneha Sandhya</span></h1>                   
                    <h1 class="text-3xl md:text-3xl font-bold mb-4 text-white">AGE CARE FOUNDATION</h1>        
                    <p class="text-gray-300 text-sm sm:text-base mt-1">Where Care Comes First</p>
                    </div>
                    <div class="flex-shrink-0 flex items-center gap-3">
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
