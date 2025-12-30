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

        <div class="newsletter-carousel">
            @foreach ($newsletters as $newsletter)
                <div class="newsletter-item">
                    <a href="{{ $newsletter->pdf }}" target="_blank">
                        <img src="{{ $newsletter->png }}" alt="{{ $newsletter->title }}" class="newsletter-image">
                        <span class="newsletter-title">{{ $newsletter->title }}</span>
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

@push('scripts')
<script>
    $(document).ready(function(){
        $('.newsletter-carousel').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>
@endpush
