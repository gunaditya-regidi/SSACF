@extends('layouts.app')

@section('title', 'Our Services - Age Care Foundation')

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
    <main>
        <x-our-services />
    </main>
@endsection

@push('scripts')
<script src="{{ asset('js/services.js') }}"></script>
@endpush
