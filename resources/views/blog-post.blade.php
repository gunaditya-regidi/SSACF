@extends('layouts.app')

@section('title', $post['title'] . ' - ACF')

@push('styles')
<style>
    .blog-content {
        padding: 4rem 1rem;
        background: #fff;
    }

    .blog-content h1 {
        font-size: 3rem;
        font-weight: 700;
        color: #1a202c;
        margin-bottom: 2rem;
        text-align: center;
    }

    .blog-post-image {
        width: 100%;
        max-width: 800px;
        height: auto;
        margin: 0 auto 2rem auto;
        display: block;
        border-radius: 10px;
    }

    .blog-content .content-body {
        max-width: 800px;
        margin: 0 auto;
        font-size: 1.1rem;
        color: #4a5568;
        line-height: 1.8;
    }

    .blog-content .content-body h3 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2d3748;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .post-meta {
        text-align: center;
        margin-bottom: 2rem;
        color: #6b7280;
    }

    .social-share {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }

    .social-share a {
        font-size: 1.5rem;
        color: #4a5568;
        transition: color 0.3s ease;
    }

    .social-share a:hover {
        color: #0046d9;
    }
</style>
@endpush

@section('content')
<div class="blog-content">
    <h1>{{ $post['title'] }}</h1>
    <div class="post-meta">
        <span>{{ date('F j, Y', strtotime($post['date'])) }}</span>
    </div>
    @if(isset($post['image']))
        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="blog-post-image">
    @endif
    <div class="content-body">
        {!! $post['content'] !!}
    </br>
    </div>
</br>

    <p class="post-meta">Share This Page :</p>
    <div class="social-share">
        <a href="#" class="share-link" data-platform="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="share-link" data-platform="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="share-link" data-platform="linkedin"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="share-link" data-platform="email"><i class="fas fa-envelope"></i></a>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const shareLinks = document.querySelectorAll('.share-link');
        const pageUrl = window.location.href;
        const pageTitle = document.title;
        const shareText = "Read the latest activities and events article from AGE CARE FOUNDATION: ";

        shareLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const platform = this.getAttribute('data-platform');
                let shareUrl = '';

                switch (platform) {
                    case 'facebook':
                        shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(pageUrl)}&quote=${encodeURIComponent(shareText)}`;
                        break;
                    case 'twitter':
                        shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(pageUrl)}&text=${encodeURIComponent(shareText + pageTitle)}`;
                        break;
                    case 'linkedin':
                        shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(pageUrl)}&title=${encodeURIComponent(pageTitle)}&summary=${encodeURIComponent(shareText)}`;
                        break;
                    case 'email':
                        shareUrl = `mailto:?subject=${encodeURIComponent(pageTitle)}&body=${encodeURIComponent(shareText + pageUrl)}`;
                        break;
                }

                if (shareUrl) {
                    window.open(shareUrl, '_blank', 'width=600,height=400');
                }
            });
        });
    });
</script>
@endpush
