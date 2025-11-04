@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-12 text-blue-600">Event Agenda</h1>

        @foreach($agenda as $day => $sessions)
            <h2 class="text-2xl font-semibold mb-6 text-blue-500">{{ $day }}</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-12">
                @foreach($sessions as $session)
                    <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col">
                        <p class="text-gray-500 font-semibold mb-2">{{ $session['time'] }}</p>
                        <h3 class="text-xl font-bold mb-1">{{ $session['track'] }} Track</h3>
                        <p class="text-gray-700">{{ $session['session'] }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</section>
@endsection
