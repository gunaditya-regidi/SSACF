<section class="bg-white py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
               Our Newsletters
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                Stay updated with our latest newsletters.
            </p>
        </div>

        @php
        $newsletter_images = glob(public_path('newsletters/*.png'));
        @endphp

        <div class="newsletter-carousel">
            @foreach ($newsletter_images as $image)
                @php
                $filename_png = basename($image);
                $filename_pdf = pathinfo($filename_png, PATHINFO_FILENAME) . '.pdf';
                $formatted_title = format_title($filename_png);
                @endphp
                <div class="newsletter-item">
                    <a href="#" class="open-modal-button" data-url="{{ url('newsletters/' . $filename_pdf) }}" data-title="{{ $formatted_title }}">
                        <img src="{{ url('newsletters/' . $filename_png) }}" alt="{{ $formatted_title }}" class="newsletter-image">
                        <span class="newsletter-title">{{ $formatted_title }}</span>
                    </a>
                </div>
            @endforeach
        </div>
       
    </div>
</section>

<style>
.newsletter-carousel .slick-slide {
    padding: 0 15px;
}

.newsletter-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.newsletter-image {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.newsletter-item a:hover .newsletter-image {
    transform: scale(1.05);
}

.newsletter-title {
    font-weight: 600;
    color: #374151; /* text-gray-700 */
}
</style>
