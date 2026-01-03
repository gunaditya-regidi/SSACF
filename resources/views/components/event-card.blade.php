<div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
    <a href="{{ route('news-and-events.show', $post['slug']) }}">
        <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-48 object-cover">
        <div class="p-6">
            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post['title'] }}</h3>
            <p class="text-gray-700">{{ Str::limit(strip_tags($post['content']), 150) }}</p>
        </div>
    </a>
</div>
