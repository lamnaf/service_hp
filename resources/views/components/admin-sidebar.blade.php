<aside class="w-64 bg-dark text-white min-h-screen flex-shrink-0 hidden md:block">
    <div class="p-6">
        <x-admin-logo class="text-white">HP Service Pro</x-admin-logo>
    </div>
    <nav class="mt-4">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : '' }}">
            <i class="fas fa-chart-simple w-5 mr-3"></i> Dashboard
        </a>
        <a href="{{ route('admin.services.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition {{ request()->routeIs('admin.services.*') ? 'bg-gray-700 text-white' : '' }}">
            <i class="fas fa-tools w-5 mr-3"></i> Services
        </a>
        <a href="{{ route('admin.portfolios.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition {{ request()->routeIs('admin.portfolios.*') ? 'bg-gray-700 text-white' : '' }}">
            <i class="fas fa-images w-5 mr-3"></i> Portfolios
        </a>
        <a href="{{ route('admin.testimonials.index') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition {{ request()->routeIs('admin.testimonials.*') ? 'bg-gray-700 text-white' : '' }}">
            <i class="fas fa-comments w-5 mr-3"></i> Testimonials
        </a>
        <a href="{{ route('admin.settings') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition {{ request()->routeIs('admin.settings') ? 'bg-gray-700 text-white' : '' }}">
            <i class="fas fa-gear w-5 mr-3"></i> Settings
        </a>
        <hr class="border-gray-700 my-4 mx-6">
        <a href="{{ route('home') }}" class="flex items-center px-6 py-3 text-gray-300 hover:bg-gray-700 hover:text-white transition">
            <i class="fas fa-arrow-left w-5 mr-3"></i> Back to Site
        </a>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="flex items-center w-full px-6 py-3 text-gray-300 hover:bg-red-600 hover:text-white transition">
                <i class="fas fa-sign-out-alt w-5 mr-3"></i> Logout
            </button>
        </form>
    </nav>
</aside>
