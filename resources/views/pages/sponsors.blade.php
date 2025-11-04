@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-8 text-blue-600">Sponsors & Partnership</h1>

        <div class="grid md:grid-cols-3 gap-8 mb-12">
            @foreach($sponsors as $sponsor)
                <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col">
                    <h2 class="text-xl font-semibold mb-2 text-blue-500">{{ $sponsor['level'] }}</h2>
                    <p class="text-gray-700 mb-4">{{ $sponsor['description'] }}</p>
                    <p class="text-gray-800 font-bold mb-4">€{{ number_format($sponsor['price'],0,',','.') }}</p>
                    <a href="#become-sponsor-form" class="mt-auto px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                        Become a Sponsor
                    </a>
                </div>
            @endforeach
        </div>

        <!-- Become a Sponsor Form -->
        <div id="become-sponsor-form" class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Become a Sponsor</h2>

            @if(session('sponsor_success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('sponsor_success') }}
                </div>
            @endif

            <form action="{{ route('sponsor.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-medium mb-1">Company</label>
                    <input type="text" name="company" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Contact Person</label>
                    <input type="text" name="contact" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" name="email" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Level of Interest</label>
                    <select name="level" class="w-full border p-2 rounded" required>
                        <option value="">-- Select Level --</option>
                        @foreach($sponsors as $sponsor)
                            <option value="{{ $sponsor['level'] }}">{{ $sponsor['level'] }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 cursor-pointer 
           appearance-none 
           -webkit-appearance-none 
           focus:outline-none">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection
