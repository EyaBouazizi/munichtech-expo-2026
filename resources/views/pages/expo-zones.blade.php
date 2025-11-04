@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-4xl font-bold mb-8 text-center text-blue-600">Expo Zones</h1>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($zones as $zone)
                <div class="bg-white shadow-lg rounded-2xl overflow-hidden flex flex-col">
                    <img src="{{ $zone['image'] }}" alt="{{ $zone['title'] }}" class="h-48 w-full object-cover">
                    <div class="p-6 flex-1 flex flex-col">
                        <h2 class="text-xl font-semibold mb-2 text-blue-500">{{ $zone['title'] }}</h2>
                        <p class="text-gray-700 mb-4 flex-1">{{ $zone['description'] }}</p>
                        <a href="#" class="mt-auto px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-center">Exhibit Here</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
