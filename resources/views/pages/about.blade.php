@extends('layouts.app')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h1 class="text-4xl font-bold mb-4 text-blue-600">About MunichTech EXPO 2026</h1>
        <p class="text-gray-700 leading-relaxed mb-8">
            MunichTech EXPO 2026 is made in Europe, for Europe — a next-generation innovation and technology festival uniting AI innovators, startups, investors, corporates, researchers, and job seekers to build Europe’s own Silicon Valley-style ecosystem.
        </p>

        <!-- Founder Bio -->
        <div class="bg-gray-50 shadow rounded-2xl p-6 mb-8">
            <h2 class="text-2xl font-semibold text-blue-500 mb-2">Founder</h2>
            <p class="text-gray-700">
                Dr. Ahmed Ebada, Senior Product Manager at BMW, envisioned MunichTech EXPO as Europe’s platform for collaboration and next-gen innovation.
            </p>
        </div>

        <!-- Inspiration -->
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white shadow p-6 rounded-2xl">
                <h3 class="text-xl font-semibold mb-2 text-blue-500">LEAP</h3>
                <p class="text-gray-700">Middle East innovation & tech conference inspiration.</p>
            </div>
            <div class="bg-white shadow p-6 rounded-2xl">
                <h3 class="text-xl font-semibold mb-2 text-blue-500">GITEX</h3>
                <p class="text-gray-700">Global technology showcase for startups and corporates.</p>
            </div>
            <div class="bg-white shadow p-6 rounded-2xl">
                <h3 class="text-xl font-semibold mb-2 text-blue-500">Bits & Pretzels</h3>
                <p class="text-gray-700">European startup festival networking model.</p>
            </div>
        </div>

        <!-- Networking Nights -->
        <div class="mt-8 p-6 bg-blue-50 rounded-2xl text-gray-700">
            <p><strong>Frühlingsfest:</strong> Networking nights and informal gatherings for attendees.</p>
        </div>
    </div>
</section>
@endsection
