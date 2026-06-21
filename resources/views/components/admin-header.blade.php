<header class="bg-white shadow-sm h-16 flex items-center px-6" x-data>
    <div class="flex items-center justify-between w-full">
        <h3 class="text-lg font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h3>
        <div class="flex items-center space-x-4">
            <span class="text-sm text-gray-600">{{ Auth::user()->name }}</span>
            <div class="w-8 h-8 bg-secondary-500 rounded-full flex items-center justify-center text-white text-sm font-semibold">
                {{ substr(Auth::user()->name, 0, 1) }}
            </div>
        </div>
    </div>
</header>
