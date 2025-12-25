<x-layout>
    <x-slot:title>News and Events</x-slot>

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-8">News and Events</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h2 class="text-xl font-bold mb-2">{{ $post->title }}</h2>
                        <p class="text-gray-700 mb-4">{{ Str::limit($post->content, 100) }}</p>
                        <a href="{{ url('/blog/' . $post->slug) }}" class="text-blue-500 hover:text-blue-700">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
