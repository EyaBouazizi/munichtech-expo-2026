@extends('layouts.app')

@section('title', 'Home - MunichTech EXPO 2026')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-primary-600 via-indigo-600 to-purple-600 text-white py-20 md:py-32 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-6 drop-shadow-2xl leading-tight">
                MunichTech EXPO 2026
            </h1>
            <p class="text-xl md:text-2xl mb-4 font-light drop-shadow-lg">
                Europe's Innovation Gateway
            </p>
            <p class="text-lg md:text-xl mb-10 max-w-3xl mx-auto drop-shadow-md opacity-95">
                Connecting Startups, Investors, and Innovators for Europe's Technology Future
            </p>
            
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <a href="{{ route('tickets.page') }}" class="btn btn-primary text-lg px-8 py-4">
                    Get Tickets Now
                </a>
                <a href="{{ route('about') }}" class="btn btn-outline text-lg px-8 py-4">
                    Learn More
                </a>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6 text-sm md:text-base">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>10,000+ Attendees</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>200+ Speakers</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>April 23–24, 2026</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">About the Event</h2>
            <p class="section-subtitle">
                MunichTech EXPO 2026 is Europe's next-generation innovation and technology festival, happening on
                <strong class="text-primary-600">April 23–24, 2026</strong> at ICM – Messe München. 
                It unites AI innovators, startups, investors, corporates, researchers, and job seekers.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="card text-center animate-slide-up">
                <div class="mb-4">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Network with Innovators</h3>
                <p class="text-gray-600 leading-relaxed">Meet 10,000+ professionals from startups, corporates, and academia. Build meaningful connections that drive innovation.</p>
            </div>
            
            <div class="card text-center animate-slide-up" style="animation-delay: 0.1s">
                <div class="mb-4">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Explore the Future</h3>
                <p class="text-gray-600 leading-relaxed">Discover cutting-edge technologies in AI, fintech, robotics, sustainability, and more. See the future of tech today.</p>
            </div>
            
            <div class="card text-center animate-slide-up" style="animation-delay: 0.2s">
                <div class="mb-4">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-900">Build Partnerships</h3>
                <p class="text-gray-600 leading-relaxed">Connect with investors, talent, and partners driving Europe's innovation ecosystem forward.</p>
            </div>
        </div>
    </div>
</section>

<!-- Event Highlights Section -->
<section class="py-16 md:py-24 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">Event Highlights</h2>
            <p class="section-subtitle">Experience the best of Europe's tech innovation in one place</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-primary-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">AI & Innovation</h3>
                <p class="text-gray-600 text-sm">Explore cutting-edge AI solutions and innovations</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-indigo-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">Startup Village</h3>
                <p class="text-gray-600 text-sm">Connect with emerging startups and investors</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-purple-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">Talent Hub</h3>
                <p class="text-gray-600 text-sm">Meet top talent and explore career opportunities</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-t-4 border-pink-500">
                <h3 class="text-lg font-semibold mb-2 text-gray-900">Workshops</h3>
                <p class="text-gray-600 text-sm">Learn from industry experts in hands-on sessions</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-24 bg-gradient-to-r from-primary-600 to-indigo-600 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Join Us?</h2>
        <p class="text-xl mb-8 opacity-95">Be part of Europe's most exciting tech event in 2026</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('tickets.page') }}" class="btn bg-white text-primary-600 hover:bg-gray-100 px-8 py-4 text-lg">
                Get Your Tickets
            </a>
            <a href="{{ route('speakers') }}" class="btn btn-outline px-8 py-4 text-lg">
                Apply as Speaker
            </a>
            <a href="{{ route('sponsors') }}" class="btn btn-outline px-8 py-4 text-lg">
                Become a Sponsor
            </a>
        </div>
    </div>
</section>
@endsection
