@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-8 text-blue-600">Contact Us</h1>

        <div class="bg-white shadow-lg rounded-2xl p-8 mb-12">
            @if(session('contact_success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('contact_success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div><label class="block font-medium mb-1">Name</label><input type="text" name="name" class="w-full border p-2 rounded" required></div>
                <div><label class="block font-medium mb-1">Email</label><input type="email" name="email" class="w-full border p-2 rounded" required></div>
                <div><label class="block font-medium mb-1">Message</label><textarea name="message" rows="5" class="w-full border p-2 rounded" required></textarea></div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Send Message</button>
            </form>
        </div>

        <div class="text-gray-700 space-y-2 mb-8">
            <p><strong>Email:</strong> ebada@hopn.eu</p>
            <p><strong>Phone:</strong> +49 179 4170592</p>
            <p>
                <strong>Social:</strong>
                <a href="#" class="text-blue-600 hover:underline">LinkedIn</a> |
                <a href="#" class="text-blue-600 hover:underline">Twitter/X</a>
            </p>
        </div>
    </div>
</section>
@endsection
