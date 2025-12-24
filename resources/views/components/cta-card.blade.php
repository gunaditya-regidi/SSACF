@props(['title', 'description', 'buttonText', 'buttonLink', 'icon'])

<div class="bg-white rounded-lg shadow-lg p-8 cta-card">
    <div class="flex items-center justify-center h-24 w-24 mx-auto mb-6">
        <i class="{{ $icon }} text-5xl text-blue-500"></i>
    </div>
    <h3 class="text-xl font-bold text-center mb-2">{{ $title }}</h3>
    <p class="text-gray-500 text-center mb-6">{{ $description }}</p>
    <a href="{{ $buttonLink }}" class="block w-full bg-blue-600 text-white text-center font-bold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
        {{ $buttonText }}
    </a>
</div>
