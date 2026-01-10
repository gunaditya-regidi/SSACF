@extends('layouts.app')

@section('title', 'Our Team')

@section('content')
    <main style="background-image: url('{{ asset('images/background/greenwv.jpg') }}'); background-size: cover; background-attachment: fixed;">
        <div class="py-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white/90 backdrop-blur-sm overflow-hidden shadow-xl sm:rounded-2xl">
                    <div class="p-8 text-gray-900">
                   
                        <div class="team-section text-center">
                            <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/CP.png') }}" alt="Chief Patron">
                            <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/comM.png') }}" alt="Committee Members">
                            <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/cmM1.png') }}" alt="Committee Members">
                            <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/bt.png') }}" alt="Committee Members">
                            <img class="h-auto w-full rounded-lg object-cover mb-8" src="{{ asset('images/team/adhc.png') }}" alt="Committee Members">
                       
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
