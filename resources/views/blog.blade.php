@extends('layouts.app')

@section('title', 'Latest Activities and Events - Age Care Foundation')

@push('styles')
<style>
.foco {
    background: linear-gradient(to right, rgba(0, 70, 209, 0.82), rgba(0, 46, 138, 0.82));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}
.content-box {
    background: linear-gradient(to right, rgba(0, 70, 209, 0.79), rgba(24, 9, 120, 0.82));
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
    padding: 2rem;
    border-radius: 15px;
    color: #fff;
}
</style>
@endpush

@section('content')
<main style="background-image: url('{{ asset('images/topper/mmm.jpg') }}'); background-size: cover; background-position: center;">
    <section class="py-20">
        <div class="container mx-auto text-center px-4">
            <div class="content-box">
                <h1 class="text-4xl font-bold tracking-tight foco sm:text-6xl">
                Latest Activities and Events
                </h1>
                <p class="mt-6 text-lg leading-8 text-white">
                    Insights and stories on senior care and well-being.
                </p>
            </div>
        </div>
    </section>
</main>
@endsection
