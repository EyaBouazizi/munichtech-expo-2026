@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-8 text-blue-600">Workshops & Add-ons</h1>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($addons as $addon)
                <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col">
                    <h2 class="text-xl font-semibold mb-2 text-blue-500">{{ $addon['name'] }}</h2>
                    <p class="text-gray-700 mb-4">{{ $addon['description'] }}</p>
                    <p class="text-gray-800 font-bold mb-4">{{ $addon['price'] }}</p>
                    <a href="#book-addon-form" class="mt-auto px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Book Now</a>
                </div>
            @endforeach
        </div>

        <!-- Book Add-on Form -->
        <div id="book-addon-form" class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-6 mt-12">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Book Add-on</h2>

            @if(session('addon_success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('addon_success') }}
                </div>
            @endif

            <form action="{{ route('addon.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-medium mb-1">Name</label>
                    <input type="text" name="name" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" name="email" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Select Add-on</label>
                    <select name="addon_type" class="w-full border p-2 rounded" required>
                        <option value="">-- Select Add-on --</option>
                        @foreach($addons as $addon)
                            <option value="{{ $addon['name'] }}">{{ $addon['name'] }} ({{ $addon['price'] }})</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Book Add-on</button>
            </form>
        </div>
    </div>
</section>
@endsection
