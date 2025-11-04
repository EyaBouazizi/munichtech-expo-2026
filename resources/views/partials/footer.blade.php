<footer class="bg-gray-900 text-gray-300 mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Brand Column -->
            <div class="lg:col-span-1">
                <h3 class="text-2xl font-bold bg-gradient-to-r from-primary-400 to-indigo-400 bg-clip-text text-transparent mb-4">
                    MunichTech EXPO 2026
                </h3>
                <p class="text-gray-400 mb-4 text-sm leading-relaxed">
                    Europe's premier innovation and technology festival, connecting startups, investors, and innovators.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary-400 transition-colors duration-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">About</a></li>
                    <li><a href="{{ route('event.details') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Event Details</a></li>
                    <li><a href="{{ route('expo.zones') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Expo Zones</a></li>
                    <li><a href="{{ route('tickets.page') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Tickets</a></li>
                    <li><a href="{{ route('agenda') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Agenda</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div>
                <h4 class="text-white font-semibold mb-4">Resources</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('speakers') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Speakers</a></li>
                    <li><a href="{{ route('sponsors') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Sponsors</a></li>
                    <li><a href="{{ route('exhibitors') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Exhibitors</a></li>
                    <li><a href="{{ route('workshops') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Workshops</a></li>
                    <li><a href="{{ route('talent.hub') }}" class="hover:text-primary-400 transition-colors duration-200 text-sm">Talent Hub</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-semibold mb-4">Contact</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>ICM – Messe München<br>Munich, Germany</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>April 23–24, 2026</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="{{ route('contact') }}" class="hover:text-primary-400 transition-colors duration-200">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-400">
                    &copy; {{ date('Y') }} MunichTech EXPO. All rights reserved.
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-sm text-gray-400 hover:text-primary-400 transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-primary-400 transition-colors duration-200">Terms of Service</a>
                    <a href="{{ route('contact') }}" class="text-sm text-gray-400 hover:text-primary-400 transition-colors duration-200">Contact</a>
                </div>
            </div>
        </div>
    </div>
</footer>
