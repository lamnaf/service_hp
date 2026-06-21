@extends('layouts.main')

@section('title', 'Layanan Service HP | HP Service Pro')

@section('content')
    <section class="py-20 bg-gradient-to-br from-dark to-secondary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Layanan Kami</h1>
            <p class="text-xl text-gray-300">Berbagai solusi perbaikan untuk semua kebutuhan smartphone Anda</p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="card group hover:-translate-y-1">
                        <div class="w-14 h-14 bg-secondary-100 rounded-xl flex items-center justify-center mb-5 group-hover:bg-secondary-500 transition">
                            <i class="{{ $service->icon ?? 'fas fa-tools' }} text-2xl text-secondary-500 group-hover:text-white transition"></i>
                        </div>
                        <h3 class="text-xl font-semibold font-poppins mb-3">{{ $service->title }}</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">{{ $service->description }}</p>
                        @if ($service->price)
                            <div class="flex items-center justify-between pt-4 border-t">
                                <span class="text-secondary-500 font-bold text-lg">Rp {{ number_format($service->price, 0, ',', '.') }}</span>
                                <a href="https://wa.me/{{ $settings['whatsapp'] ?? '6281234567890' }}" target="_blank" class="text-accent-500 hover:text-accent-600">
                                    <i class="fab fa-whatsapp text-xl"></i>
                                </a>
                            </div>
                        @endif
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 text-gray-400">
                        <i class="fas fa-tools text-5xl mb-4"></i>
                        <p>Belum ada layanan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
