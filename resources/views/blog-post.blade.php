@extends('layouts.app')

@section('title', $post->title)

@section('content')

@push('styles')
<style>
    .blog-post-container {
        max-width: 800px;
        margin: 2rem auto;
        padding: 2rem;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .blog-post-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 2rem;
    }

    .blog-post-content {
        color: #1a202c;
    }

    .blog-post-date {
        font-size: 0.875rem;
        color: #718096;
        margin-bottom: 1rem;
    }
</style>
@endpush

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="blog-post-container">
            @if(isset($post->image))
                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="blog-post-image">
            @endif
            <p class="blog-post-date">Published on: {{ date('F d, Y', $post->date) }}</p>
            <h1 class="font-semibold text-3xl text-gray-800 leading-tight mb-6">{{ $post->title }}</h1>
            <div class="blog-post-content">
                {!! $post->content !!}
            </div>
        </div>
    </div>
</div>
@endsection
