@extends('layouts.app')

@section('title', 'About Us - Age Care Foundation')

@push('styles')
<style>
    .mission-section {
        background-color: #f8f9fa;
        padding: 6rem 4rem;
    }

    .mission-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 1200px;
        margin: 0 auto;
        gap: 4rem;
    }

    .mission-content {
        max-width: 600px;
    }

    .mission-headline {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .mission-description {
        font-size: 1.125rem;
        color: #666;
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .mission-tags {
        display: flex;
        gap: 1rem;
    }

    .mission-tag {
        background-color: #e2e8f0;
        color: #4a5568;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .mission-image-wrapper img {
        max-width: 500px;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
    .foco {
        background: linear-gradient(to right, rgba(0, 7, 104, 0.79), rgb(29, 0, 191));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
</style>
@endpush

@section('content')
    <section class="py-5 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold foco sm:text-5xl tracking-tight">About Us</h2>
                <p class="mt-4 text-lg text-black">Discover the story behind Sneha Sandhya Age Care Foundation—our mission, our values, and our unwavering commitment to senior wellness.</p>
            </div>
        </div>
    </section>
    <x-our-mission />
    <x-core-values />
@endsection
