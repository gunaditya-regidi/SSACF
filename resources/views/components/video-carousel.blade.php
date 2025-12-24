@php
$videos = [
    [
        'youtube_id' => 'z1Y2_C8S2nE',
        'title' => 'A Day in the Life',
        'thumbnail' => 'https://i3.ytimg.com/vi/z1Y2_C8S2nE/maxresdefault.jpg',
    ],
    [
        'youtube_id' => 'Ipa5SA09y1E',
        'title' => 'Resident Testimonials',
        'thumbnail' => 'https://i3.ytimg.com/vi/Ipa5SA09y1E/maxresdefault.jpg',
    ],
    [
        'youtube_id' => 'dQw4w9WgXcQ',
        'title' => 'A Message from Our Founder',
        'thumbnail' => 'https://i3.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg',
    ],
];
@endphp

<section class="gallery-section">
    <div class="text-left mb-8">
        <h2 class="text-3xl font-extrabold text-gray-800">Hear Our Stories</h2>
        <p class="mt-2 text-lg text-gray-600">Watch and discover the vibrant life at Sneha Sandhya.</p>
    </div>
    <div class="video-carousel">
        @foreach ($videos as $video)
            <div class="px-2">
                <div class="video-card cursor-pointer" data-youtube-id="{{ $video['youtube_id'] }}">
                    <div class="relative overflow-hidden rounded-lg shadow-md">
                        <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30">
                            <i class="fab fa-youtube text-white text-4xl"></i>
                        </div>
                    </div>
                    <p class="mt-2 text-center text-sm font-medium text-gray-700">{{ $video['title'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
