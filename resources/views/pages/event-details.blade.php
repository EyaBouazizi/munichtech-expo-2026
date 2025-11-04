@extends('layouts.app')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-6 text-blue-600">Event Details</h1>

        <!-- Dates & Venue -->
        <div class="bg-gray-50 p-6 rounded-2xl shadow mb-8">
            <h2 class="text-2xl font-semibold mb-2 text-blue-500">Dates & Venue</h2>
            <p class="text-gray-700 mb-2"><strong>Dates:</strong> April 23–24, 2026</p>
            <p class="text-gray-700"><strong>Venue:</strong> ICM – Messe München, Hall B0</p>
        </div>

        <!-- Attendees Info -->
        <div class="bg-gray-50 p-6 rounded-2xl shadow mb-8">
            <h2 class="text-2xl font-semibold mb-2 text-blue-500">Expected Attendees</h2>
            <p class="text-gray-700">10,000+ attendees from 35+ countries, including startups, investors, corporates, researchers, and students.</p>
        </div>

        <!-- Categories -->
        <div class="grid md:grid-cols-2 gap-6 mb-8">
            <div class="bg-white shadow p-6 rounded-2xl">
                <h3 class="text-xl font-semibold mb-2 text-blue-500">Startups</h3>
                <p class="text-gray-700">Early-stage and growth startups showcasing products and services.</p>
            </div>
            <div class="bg-white shadow p-6 rounded-2xl">
                <h3 class="text-xl font-semibold mb-2 text-blue-500">Investors</h3>
                <p class="text-gray-700">Venture capitalists, angels, and corporate investors seeking innovation opportunities.</p>
            </div>
            <div class="bg-white shadow p-6 rounded-2xl">
                <h3 class="text-xl font-semibold mb-2 text-blue-500">Corporates</h3>
                <p class="text-gray-700">Leading companies exploring partnerships, talent, and new technologies.</p>
            </div>
            <div class="bg-white shadow p-6 rounded-2xl">
                <h3 class="text-xl font-semibold mb-2 text-blue-500">Researchers & Students</h3>
                <p class="text-gray-700">Academics and students exploring career and collaboration opportunities.</p>
            </div>
        </div>

        <!-- Map & Travel -->
        <div class="bg-gray-50 p-6 rounded-2xl shadow">
            <h2 class="text-2xl font-semibold mb-2 text-blue-500">Venue Map & Travel Info</h2>
            <div class="mb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.865155791139!2d11.584487515456937!3d48.13512507922866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e7576f1d9e6c3%3A0xa1b42d7c6d6f!2sICM%20Messe%20M%C3%BCnchen!5e0!3m2!1sen!2sde!4v1700000000000!5m2!1sen!2sde" 
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <p class="text-gray-700">Accessible via public transport and nearby hotels. Free parking available on site.</p>
        </div>
    </div>
</section>
@endsection
