@php
    $newsletters = [
        ['month' => 'June 2023', 'image' => asset('storage/newsletters/june2023.png'), 'pdf' => asset('storage/newsletters/june2023.pdf')],
        ['month' => 'May 2023', 'image' => asset('storage/newsletters/may2023.png'), 'pdf' => asset('storage/newsletters/may2023.pdf')],
        ['month' => 'April 2023', 'image' => asset('storage/newsletters/april2023.png'), 'pdf' => asset('storage/newsletters/april2023.pdf')],
        ['month' => 'March 2023', 'image' => asset('storage/newsletters/march2023.png'), 'pdf' => asset('storage/newsletters/march2023.pdf')],
        ['month' => 'February 2023', 'image' => asset('storage/newsletters/february2023.png'), 'pdf' => asset('storage/newsletters/february2023.pdf')],
        ['month' => 'January 2023', 'image' => asset('storage/newsletters/january2023.png'), 'pdf' => asset('storage/newsletters/january2023.pdf')],
    ];
@endphp

<section id="newsletter" class="text-center py-16 bg-gray-100">
    <h2 class="text-4xl font-bold mb-4">Our Newsletters</h2>
    <p class="text-lg text-gray-600 mb-10">Stay updated with our latest activities and initiatives.</p>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 px-8">
        @foreach ($newsletters as $newsletter)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                <a href="#" class="open-pdf-modal" data-pdf-url="{{ $newsletter['pdf'] }}" data-pdf-title="{{ $newsletter['month'] }} Newsletter">
                    <img src="{{ $newsletter['image'] }}" alt="{{ $newsletter['month'] }} Newsletter" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $newsletter['month'] }}</h3>
                        <p class="text-gray-600">Read our {{ $newsletter['month'] }} newsletter to catch up on all our latest news.</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>
