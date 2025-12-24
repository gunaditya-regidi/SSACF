@php
$panoramas = [
    [
        'title' => 'Main Lounge',
        'thumbnail' => 'https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=600',
        'panorama' => 'https://images.pexels.com/photos/1643383/pexels-photo-1643383.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    ],
    [
        'title' => 'Community Dining Area',
        'thumbnail' => 'https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&w=600',
        'panorama' => 'https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    ],
    [
        'title' => 'Private Room',
        'thumbnail' => 'https://images.pexels.com/photos/271618/pexels-photo-271618.jpeg?auto=compress&cs=tinysrgb&w=600',
        'panorama' => 'https://images.pexels.com/photos/271618/pexels-photo-271618.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
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
