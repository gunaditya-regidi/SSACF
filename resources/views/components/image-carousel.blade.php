@props(['images', 'direction' => 'left-to-right'])

<div class="carousel-container">
    <div class="carousel-track {{ $direction }}">
        @foreach ($images as $image)
            <div class="carousel-item">
                <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-cover">
            </div>
        @endforeach
        @foreach ($images as $image)
            <div class="carousel-item">
                <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-full h-full object-cover">
            </div>
        @endforeach
    </div>
</div>
