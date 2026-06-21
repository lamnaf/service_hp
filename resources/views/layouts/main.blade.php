<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'HP Service Pro | Service HP Cepat & Bergaransi')</title>
    <meta name="description" content="@yield('meta_description', 'Jasa service HP profesional, pengerjaan cepat 1 hari, teknisi berpengalaman dan bergaransi.')">

    <meta property="og:title" content="@yield('og_title', 'HP Service Pro')" />
    <meta property="og:description" content="@yield('og_description', 'Service HP cepat dan terpercaya.')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', asset('storage/' . ($settings['logo'] ?? '')))" />

    <link rel="icon" type="image/svg+xml" href="{{ asset('images/logo.svg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-white">
    <x-navigation :settings="$settings" />

    <main>
        @yield('content')
    </main>

    <x-footer :settings="$settings" />

    @stack('scripts')
</body>
</html>
