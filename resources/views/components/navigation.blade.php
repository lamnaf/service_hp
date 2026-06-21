@props(['settings'])

<nav class="bg-white shadow-sm sticky top-0 z-50" x-data="{ mobileOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-mobile-screen text-2xl text-secondary-500"></i>
                <span class="text-2xl font-bold text-primary-500 font-poppins">{{ $settings['business_name'] ?? 'HP Service Pro' }}</span>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-secondary-500 font-medium transition">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-secondary-500 font-medium transition">About</a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-secondary-500 font-medium transition">Services</a>
                <a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-secondary-500 font-medium transition">Portfolio</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-secondary-500 font-medium transition">Contact</a>
            </div>

            <button @click="mobileOpen = !mobileOpen" class="md:hidden text-gray-700 text-2xl">
                <i class="fas" :class="mobileOpen ? 'fa-times' : 'fa-bars'"></i>
            </button>
        </div>
    </div>

    <div x-show="mobileOpen" @click.away="mobileOpen = false" class="md:hidden bg-white border-t" x-transition>
        <div class="px-4 py-4 space-y-3">
            <a href="{{ route('home') }}" class="block text-gray-700 hover:text-secondary-500 font-medium">Home</a>
            <a href="{{ route('about') }}" class="block text-gray-700 hover:text-secondary-500 font-medium">About</a>
            <a href="{{ route('services') }}" class="block text-gray-700 hover:text-secondary-500 font-medium">Services</a>
            <a href="{{ route('portfolio') }}" class="block text-gray-700 hover:text-secondary-500 font-medium">Portfolio</a>
            <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-secondary-500 font-medium">Contact</a>
        </div>
    </div>
</nav>
