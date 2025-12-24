@props(['icon', 'title'])

<div class="service-card">
    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $title }}</h3>
    <p class="text-gray-600">{{ $slot }}</p>
    <a href="#" class="text-green-500 hover:text-green-700 font-semibold mt-4 inline-block">Learn More &rarr;</a>
</div>
