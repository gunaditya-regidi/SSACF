@props(['posts', 'latestNewsletter'])

<div class="latest-articles py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="latest-articles-col md:col-span-2">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Latest Articles</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach ($posts as $post)
                        <x-event-card :post="collect($post)->all()" />
                    @endforeach
                </div>
            </div>
            <div class="latest-newsletter-col">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Latest Newsletter</h2>
                @if ($latestNewsletter)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                         <a href="{{ $latestNewsletter->pdf_url }}" target="_blank" class="open-modal-button" data-url="{{ $latestNewsletter->pdf_url }}" data-title="{{ $latestNewsletter->title }}">
                            @if($latestNewsletter->image)
                                <img src="{{ $latestNewsletter->image }}" alt="{{ $latestNewsletter->title }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                    <p class="text-gray-500">No Image Available</p>
                                </div>
                            @endif
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $latestNewsletter->title }}</h3>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
