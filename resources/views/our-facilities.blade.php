@extends('layouts.app')

@section('title', 'Our Facilities')

@section('content')
    <main style="background-image: url('{{ asset('images/background/greenwv.jpg') }}'); background-size: cover; background-attachment: fixed;">
        <div class="py-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white/90 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-2xl">
                    <div class="p-8 text-gray-900">
                        <h1 class="text-4xl font-bold text-center text-blue-900 mb-8">Our Facilities</h1>
                        <p class="text-lg text-center text-gray-700">Details about our facilities will be coming soon.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
