<div class="youtube-carousel-container">
    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl text-center mb-12">Videos</h2>
    <div class="youtube-carousel">
        @foreach ($videos as $video)
            <div class="youtube-carousel-item">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $video['id'] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h3 class="text-lg font-semibold mt-4">{{ $video['title'] }}</h3>
                <p class="text-sm text-gray-500">{{ $video['credits'] }}</p>
            </div>
        @endforeach
    </div>
    <div class="carousel-controls youtube-carousel-controls"></div>
</div>