@if (!empty($posts))
    <section class="blog-section bg-gray-100 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl text-center mb-12">Latest Activities</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($posts as $post)
                    <article class="blog-post-card bg-white rounded-lg shadow-md overflow-hidden">
                        @if($post['image'])
                            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="blog-post-card-image w-full h-48 object-cover">
                        @endif
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">{{ $post['title'] }}</h3>
                            @if($post['date'])
                                <p class="text-sm text-gray-500 mb-2">{{ \Carbon\Carbon::parse($post['date'])->format('F j, Y') }}</p>
                            @endif
                            <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($post['content']), 100) }}</p>
                            <a href="{{ route('blog.show', $post['slug']) }}" class="text-blue-600 hover:text-blue-800 font-semibold">Read More</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endif
