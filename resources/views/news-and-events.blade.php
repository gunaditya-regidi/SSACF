@extends('layouts.app')

@section('title', 'News and Events')

@section('content')

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
</style>
@endpush

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

<x-faq-section />
<x-news-carousel :newsletters="$newsletters" />

@endsection