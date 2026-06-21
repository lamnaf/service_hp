<a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
    <img src="{{ asset('images/logo.svg') }}" alt="HP Service Pro" class="w-8 h-8">
    <span class="text-lg font-bold font-poppins {{ $attributes->get('class') }}">{{ $slot }}</span>
</a>
