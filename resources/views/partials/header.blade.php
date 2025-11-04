<nav class="bg-white shadow-lg sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="text-2xl font-bold bg-gradient-to-r from-primary-600 to-indigo-600 bg-clip-text text-transparent hover:from-primary-700 hover:to-indigo-700 transition-all duration-300">
                    MunichTech EXPO 2026
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex lg:items-center lg:space-x-1">
                <a href="{{ route('home') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Home</a>
                <a href="{{ route('about') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">About</a>
                <a href="{{ route('event.details') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Event Details</a>
                <a href="{{ route('expo.zones') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Expo Zones</a>
                <a href="{{ route('tickets.page') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Tickets</a>
                <a href="{{ route('speakers') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Speakers</a>
                <a href="{{ route('sponsors') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Sponsors</a>
                <a href="{{ route('exhibitors') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Exhibitors</a>
                <a href="{{ route('workshops') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Workshops</a>
                <a href="{{ route('talent.hub') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Talent Hub</a>
                <a href="{{ route('agenda') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Agenda</a>
                <a href="{{ route('contact') }}" class="px-4 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors duration-200 font-medium">Contact</a>
            </div>

            <!-- CTA Button & Mobile Menu Button -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('tickets.page') }}" class="hidden lg:block btn btn-primary">
                    Get Tickets
                </a>
                
                <!-- Mobile menu button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-md text-gray-700 hover:text-primary-600 hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-primary-500 transition-colors">
                    <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation -->
    <div x-show="mobileMenuOpen" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="lg:hidden border-t border-gray-200 bg-white"
         style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Home</a>
            <a href="{{ route('about') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">About</a>
            <a href="{{ route('event.details') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Event Details</a>
            <a href="{{ route('expo.zones') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Expo Zones</a>
            <a href="{{ route('tickets.page') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Tickets</a>
            <a href="{{ route('speakers') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Speakers</a>
            <a href="{{ route('sponsors') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Sponsors</a>
            <a href="{{ route('exhibitors') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Exhibitors</a>
            <a href="{{ route('workshops') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Workshops</a>
            <a href="{{ route('talent.hub') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Talent Hub</a>
            <a href="{{ route('agenda') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Agenda</a>
            <a href="{{ route('contact') }}" class="block px-3 py-2 text-gray-700 hover:text-primary-600 hover:bg-primary-50 rounded-md font-medium transition-colors">Contact</a>
            <div class="pt-2">
                <a href="{{ route('tickets.page') }}" class="block w-full text-center px-4 py-2 btn btn-primary">
                    Get Tickets
                </a>
            </div>
        </div>
    </div>
</nav>
