@extends('layouts.app')

@section('title', 'News and Events')

@push('styles')
<style>
    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }
    .news-card {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
    }
    .news-card-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .news-card-content {
        padding: 1.5rem;
    }
    .news-card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1a202c;
        margin-bottom: 0.5rem;
    }
    .news-card-excerpt {
        color: #4a5568;
        margin-bottom: 1rem;
        font-size: 1rem;
    }
    .news-card-link {
        display: inline-block;
        font-weight: 600;
        color: #0046d9;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .news-card-link:hover {
        color: #0033a0;
    }

    /* New Newsletter Carousel Styles */
    .newsletter-section {
        background-color: #f8f9fa;
        padding: 50px 0;
    }
    .scroller {
        max-width: 1200px;
        margin: auto;
        overflow: hidden;
        -webkit-mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
        mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
    }
    .scroller__inner {
        display: flex;
        gap: 1rem;
        animation: scroll 40s linear infinite;
    }
    .scroller:hover .scroller__inner {
        animation-play-state: paused;
    }
    @keyframes scroll {
        to {
            transform: translateX(-50%);
        }
    }
    .newsletter-item {
        flex: 0 0 auto;
        width: 250px;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
    }
    .newsletter-image {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .newsletter-item:hover .newsletter-image {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .newsletter-title {
        margin-top: 10px;
        font-weight: 600;
        color: #374151;
        font-size: 1.1rem;
    }

    /* PDF Viewer Modal Styles */
    .pdf-viewer-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.85);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
    .pdf-viewer-modal iframe {
        width: 90%;
        height: 90%;
        border: none;
        border-radius: 8px;
    }
    .close-pdf-btn {
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
        background: #fff;
        color: #000;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 24px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
</style>
@endpush

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight mb-6">
            News and Events
        </h2>
        <div class="news-grid">
            @foreach ($posts as $post)
                <div class="news-card">
                    @if(isset($post->image))
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="news-card-image">
                    @endif
                    <div class="news-card-content">
                        <h3 class="news-card-title">{{ $post->title }}</h3>
                        <p class="news-card-excerpt">{{ Str::limit(strip_tags($post->content), 150) }}</p>
                        <a href="{{ url('/news-and-events/' . $post->slug) }}" class="news-card-link">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- New Newsletter Section -->
<section class="newsletter-section">
    <div class="container mx-auto px-4 text-center mb-12">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Our Newsletters</h2>
        <p class="mt-4 text-lg text-gray-500">Stay updated with our latest newsletters. Click to read.</p>
    </div>
    <div class="scroller">
        <div class="scroller__inner">
            @php
                $manualNewsletters = [
                    (object)['png' => 'images/newsletters/january2023.png', 'pdf' => 'images/newsletters/january2023.pdf', 'title' => 'January 2023'],
                    (object)['png' => 'images/newsletters/february2023.png', 'pdf' => 'images/newsletters/february2023.pdf', 'title' => 'February 2023'],
                    (object)['png' => 'images/newsletters/march2023.png', 'pdf' => 'images/newsletters/march2023.pdf', 'title' => 'March 2023'],
                    (object)['png' => 'images/newsletters/april2023.png', 'pdf' => 'images/newsletters/april2023.pdf', 'title' => 'April 2023'],
                    (object)['png' => 'images/newsletters/may2023.png', 'pdf' => 'images/newsletters/may2023.pdf', 'title' => 'May 2023'],
                    (object)['png' => 'images/newsletters/june2023.png', 'pdf' => 'images/newsletters/june2023.pdf', 'title' => 'June 2023'],
                ];
                $doubledNewsletters = collect($manualNewsletters)->concat($manualNewsletters);
            @endphp
            @foreach ($doubledNewsletters as $newsletter)
                <a href="javascript:void(0)" class="newsletter-item" data-pdf-url="{{ asset($newsletter->pdf) }}">
                    <img src="{{ asset($newsletter->png) }}" alt="{{ $newsletter->title }}" class="newsletter-image">
                    <div class="newsletter-title">{{ $newsletter->title }}</div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<x-faq-section />

<!-- PDF Viewer Modal -->
<div id="pdf-viewer" class="pdf-viewer-modal">
    <iframe id="pdf-iframe" src="" frameborder="0"></iframe>
    <button id="close-pdf" class="close-pdf-btn">&times;</button>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const pdfViewer = document.getElementById('pdf-viewer');
    const pdfIframe = document.getElementById('pdf-iframe');
    const closePdfBtn = document.getElementById('close-pdf');
    const newsletterItems = document.querySelectorAll('.newsletter-item');

    newsletterItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const pdfUrl = this.getAttribute('data-pdf-url');
            if (pdfUrl) {
                pdfIframe.setAttribute('src', pdfUrl);
                pdfViewer.style.display = 'flex';
            }
        });
    });

    closePdfBtn.addEventListener('click', function() {
        pdfViewer.style.display = 'none';
        pdfIframe.setAttribute('src', '');
    });

    pdfViewer.addEventListener('click', function(e) {
        if (e.target === pdfViewer) {
            closePdfBtn.click();
        }
    });
});
</script>
@endpush
