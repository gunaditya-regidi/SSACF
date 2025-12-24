@php
    $sponsors = [
        'images/sponsors/chpw.png',
        'images/sponsors/devi.png',
        'images/sponsors/dibvi.png',
        'images/sponsors/ever.png',
        'images/sponsors/gef.png',
        'images/sponsors/kali.png',
        'images/sponsors/kvb.png',
        'images/sponsors/neka.png',
        'images/sponsors/poli.png',
        'images/sponsors/rotary.png',
        'images/sponsors/salp.png',
        'images/sponsors/srava.png',
    ];
    $allSponsors = array_merge($sponsors, $sponsors);
@endphp

<section class="our-sponsors-section bg-white py-20 overflow-hidden">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl text-center mb-12">Our Sponsors</h2>
        <div class="sponsors-track-container">
            <div class="sponsors-track">
                @foreach ($allSponsors as $sponsor)
                    <div class="sponsor-logo">
                        <img src="{{ url($sponsor) }}" alt="Sponsor Logo">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
