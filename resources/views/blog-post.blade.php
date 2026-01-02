@extends('layouts.app')

@section('title', $post->title)

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<style>
    .blog-post-container {
        max-width: 800px;
        margin: 4rem auto;
        padding: 2rem;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.08);
    }
    .blog-post-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 1rem;
    }
    .blog-post-meta {
        font-size: 0.9rem;
        color: #718096;
        margin-bottom: 2rem;
    }
    .image-carousel-container {
        margin-bottom: 2rem;
    }
    .image-carousel .slick-slide img {
        width: 100%;
        border-radius: 8px;
    }
    .slick-prev, .slick-next {
        z-index: 1;
    }
    .slick-prev:before, .slick-next:before {
        font-size: 24px;
        color: #0046d9;
    }
    .blog-post-content {
        color: #2d3748;
        line-height: 1.7;
        text-align: justify;
    }
    .blog-post-content h2, h3, h4 {
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }
    .blog-post-content p {
        margin-bottom: 1rem;
    }
    .social-share {
        margin-top: 3rem;
        padding-top: 2rem;
        border-top: 1px solid #e2e8f0;
        text-align: center;
    }
    .social-share h4 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }
    .social-share a {
        font-size: 1.5rem;
        margin: 0 0.75rem;
        color: #4a5568;
        transition: color 0.3s ease;
    }
    .social-share a:hover {
        color: #1a202c;
    }
</style>
@endpush

@section('content')
<div class="blog-post-container">
    <h1 class="blog-post-title">{{ $post->title }}</h1>
    <p class="blog-post-meta">Published on {{ $post->date->format('F j, Y') }}</p>

    @if(!empty($post->images))
        <div class="image-carousel-container">
            <div class="image-carousel">
                @foreach($post->images as $imagePath)
                    <div>
                        <img src="{{ asset($imagePath) }}" alt="{{ $post->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    @elseif($post->image)
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="blog-post-image">
    @endif

    <div class="blog-post-content">
        {!! $post->content !!}
    </div>

    <div class="social-share">
        <h4>Share this post</h4>
        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::fullUrl()) }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}&text={{ urlencode($post->title) }}" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(Request::fullUrl()) }}&title={{ urlencode($post->title) }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.image-carousel').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            adaptiveHeight: true,
            prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>'
        });
    });
</script>
@endpush
