@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-8 text-blue-600">Speakers</h1>

        <!-- Speakers Grid -->
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            @foreach($speakers as $speaker)
                <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col items-center">
                    <img src="{{ $speaker['photo'] }}" alt="{{ $speaker['name'] }}" class="w-32 h-32 object-cover rounded-full mb-4">
                    <h2 class="text-xl font-semibold mb-1 text-blue-500">{{ $speaker['name'] }}</h2>
                    <p class="text-gray-700 mb-1">{{ $speaker['title'] }}</p>
                    <p class="text-gray-600">{{ $speaker['topic'] }}</p>
                </div>
            @endforeach
        </div>

        <!-- Apply as Speaker Form -->
        <div class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Apply as Speaker</h2>

            @if(session('speaker_success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('speaker_success') }}
                </div>
            @endif

            <form action="{{ route('speaker.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
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
                    <label class="block font-medium mb-1">Topic</label>
                    <input type="text" name="topic" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Bio</label>
                    <textarea name="bio" class="w-full border p-2 rounded" rows="4" required></textarea>
                </div>
                <div>
                    <label class="block font-medium mb-1">Upload Photo</label>
                    <input type="file" name="photo" accept="image/*" class="w-full border p-2 rounded">
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection

