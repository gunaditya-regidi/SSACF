@php
$panoramas = [
    [
        'title' => 'Main Lounge',
        'thumbnail' => 'https://c1.staticflickr.com/5/4122/4774341054_4263a758f8_b.jpg',
        'panorama' => 'https://c1.staticflickr.com/5/4122/4774341054_4263a758f8_b.jpg',
    ],
    [
        'title' => 'Community Dining Area',
        'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/First_floor_of_the_Frick_Collection%2C_looking_east_in_the_Garden_Court_from_the_Fragonard_Room.jpg',
        'panorama' => 'https://upload.wikimedia.org/wikipedia/commons/a/a4/First_floor_of_the_Frick_Collection%2C_looking_east_in_the_Garden_Court_from_the_Fragonard_Room.jpg',
    ],
    [
        'title' => 'Private Room',
        'thumbnail' => 'https://live.staticflickr.com/65535/50543393932_36b53ea6f0_k.jpg',
        'panorama' => 'https://live.staticflickr.com/65535/50543393932_36b53ea6f0_k.jpg',
    ],
];
@endphp

<section class="gallery-section">
    <div class="text-left mb-8">
        <h2 class="text-3xl font-extrabold text-gray-800">Explore Our Home</h2>
        <p class="mt-2 text-lg text-gray-600">Take a virtual tour and experience the warmth of our community.</p>
    </div>
    <div class="panorama-carousel">
        @foreach ($panoramas as $pano)
            <div class="px-2">
                <div class="panorama-card cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg shadow-md" 
                         data-panorama-src="{{ $pano['panorama'] }}" 
                         data-panorama-title="{{ $pano['title'] }}">
                        <img src="{{ $pano['thumbnail'] }}" alt="Thumbnail for {{ $pano['title'] }}" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-30">
                            <i class="fas fa-vr-cardboard text-white text-4xl"></i>
                        </div>
                    </div>
                    <p class="mt-2 text-center text-sm font-medium text-gray-700">{{ $pano['title'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>