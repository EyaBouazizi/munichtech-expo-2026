@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-8 text-blue-600">Tickets & Booking</h1>

        <!-- Early Bird -->
        <div class="mb-12 bg-blue-100 text-blue-800 p-6 rounded-2xl">
            <p class="text-lg font-semibold">Early Bird Offer: Save 20% if you book before February 15, 2026!</p>
        </div>

        <!-- Tickets Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            @foreach($tickets as $ticket)
                <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col">
                    <h2 class="text-xl font-semibold mb-2 text-blue-500">{{ $ticket['type'] }}</h2>
                    <p class="text-gray-700 text-lg mb-4">€{{ number_format($ticket['price'], 0, ',', '.') }}</p>
                    <a href="{{ route('tickets.create') }}" class="mt-auto px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Book Now
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Booking Form -->
        <div class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Book Your Ticket</h2>

            @if(session('success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('tickets.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-medium mb-1">Name</label>
                    <input type="text" name="name" class="w-full border p-2 rounded" required>
                    @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" name="email" class="w-full border p-2 rounded" required>
                    @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block font-medium mb-1">Ticket Type</label>
                    <select name="ticket_type" class="w-full border p-2 rounded" required>
                        <option value="">-- Select Ticket --</option>
                        @foreach($tickets as $ticket)
                            <option value="{{ $ticket['type'] }}">{{ $ticket['type'] }} (€{{ number_format($ticket['price'],0,',','.') }})</option>
                        @endforeach
                    </select>
                    @error('ticket_type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                </div>

                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Book Ticket
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
