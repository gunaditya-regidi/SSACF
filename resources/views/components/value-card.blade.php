@props(['icon', 'title'])

<div class="approach-card text-center transform hover:-translate-y-2 transition-transform duration-300">
    <div class="flex items-center justify-center h-20 w-20 mx-auto mb-6">
        <i class="{{ $icon }} text-5xl text-blue-500"></i>
    </div>
    <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $title }}</h3>
    <p class="text-gray-600">{{ $slot }}</p>
</div>
