@php
    $sponsors = [
        'storage/images/sponsors/chpw.png',
        'storage/images/sponsors/devi.png',
        'storage/images/sponsors/dibvi.png',
        'storage/images/sponsors/ever.png',
        'storage/images/sponsors/gef.png',
        'storage/images/sponsors/kali.png',
        'storage/images/sponsors/kvb.png',
        'storage/images/sponsors/neka.png',
        'storage/images/sponsors/poli.png',
        'storage/images/sponsors/rotary.png',
        'storage/images/sponsors/salp.png',
        'storage/images/sponsors/srava.png',
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
