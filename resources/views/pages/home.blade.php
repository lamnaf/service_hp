@extends('layouts.main')

@section('title', 'HP Service Pro | Service HP Cepat & Bergaransi')

@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-dark overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-dark via-dark/95 to-secondary-900/80"></div>
        <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%232563EB\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-36">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <span class="inline-block bg-accent-500/20 text-accent-300 px-4 py-2 rounded-full text-sm font-semibold mb-6">Solusi Service HP Profesional</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold font-poppins leading-tight mb-6">
                        Service HP Cepat & Bergaransi, <span class="text-accent-400">Selesai Dalam 1 Hari</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-300 mb-8 leading-relaxed">
                        Perbaikan smartphone oleh teknisi berpengalaman dengan sparepart berkualitas. Transparan, cepat, dan terpercaya.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="https://wa.me/{{ $settings['whatsapp'] ?? '6281234567890' }}" target="_blank" class="btn-accent inline-flex items-center space-x-2">
                            <i class="fab fa-whatsapp"></i>
                            <span>Booking Service</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn-outline border-white text-white hover:bg-white hover:text-dark inline-flex items-center space-x-2">
                            <i class="fas fa-headset"></i>
                            <span>Hubungi Kami</span>
                        </a>
                    </div>
                </div>
                <div class="hidden md:flex justify-center">
                    <div class="relative">
                        <div class="w-80 h-80 bg-gradient-to-br from-accent-500/20 to-secondary-500/20 rounded-full blur-3xl absolute -top-10 -right-10"></div>
                        <div class="relative grid grid-cols-2 gap-4">
                            <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10">
                                <i class="fas fa-mobile-alt text-4xl text-accent-400 mb-3"></i>
                                <p class="text-white font-semibold">All Brands</p>
                            </div>
                            <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10 mt-8">
                                <i class="fas fa-tools text-4xl text-accent-400 mb-3"></i>
                                <p class="text-white font-semibold">Profesional</p>
                            </div>
                            <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10">
                                <i class="fas fa-shield-alt text-4xl text-accent-400 mb-3"></i>
                                <p class="text-white font-semibold">Bergaransi</p>
                            </div>
                            <div class="bg-white/5 backdrop-blur rounded-2xl p-6 border border-white/10 mt-8">
                                <i class="fas fa-bolt text-4xl text-accent-400 mb-3"></i>
                                <p class="text-white font-semibold">Cepat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Trust Indicator --}}
    <section class="py-16 bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-secondary-500 font-poppins">5+</div>
                    <div class="text-gray-600 mt-2">Tahun Pengalaman</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-secondary-500 font-poppins">1000+</div>
                    <div class="text-gray-600 mt-2">HP Diperbaiki</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-secondary-500 font-poppins">100%</div>
                    <div class="text-gray-600 mt-2">Garansi Service</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-secondary-500 font-poppins">1 Hari</div>
                    <div class="text-gray-600 mt-2">Pengerjaan Cepat</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="py-20 bg-gray-50" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-secondary-100 text-secondary-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Layanan Kami</span>
                <h2 class="section-title">Layanan Unggulan</h2>
                <p class="section-subtitle">Kami menyediakan berbagai layanan perbaikan smartphone dengan kualitas terbaik dan harga transparan.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($services as $service)
                    <div class="card group hover:border-secondary-500/30 hover:-translate-y-1">
                        <div class="w-14 h-14 bg-secondary-100 rounded-xl flex items-center justify-center mb-5 group-hover:bg-secondary-500 transition">
                            <i class="{{ $service->icon ?? 'fas fa-tools' }} text-2xl text-secondary-500 group-hover:text-white transition"></i>
                        </div>
                        <h3 class="text-xl font-semibold font-poppins mb-3">{{ $service->title }}</h3>
                        <p class="text-gray-600 mb-4 leading-relaxed">{{ $service->description }}</p>
                        @if ($service->price)
                            <div class="text-secondary-500 font-bold text-lg">Rp {{ number_format($service->price, 0, ',', '.') }}</div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Choose Us --}}
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-accent-100 text-accent-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Kenapa Kami?</span>
                <h2 class="section-title">Kenapa Memilih Kami?</h2>
                <p class="section-subtitle">Kami berkomitmen memberikan layanan terbaik untuk setiap pelanggan.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-secondary-100 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-user-tie text-3xl text-secondary-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold font-poppins mb-3">Teknisi Profesional</h3>
                    <p class="text-gray-600 text-sm">Ditangani oleh teknisi berpengalaman dan tersertifikasi.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-secondary-100 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-hand-holding-usd text-3xl text-secondary-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold font-poppins mb-3">Harga Transparan</h3>
                    <p class="text-gray-600 text-sm">Harga jelas tanpa biaya tersembunyi, diagnosa gratis.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-secondary-100 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-bolt text-3xl text-secondary-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold font-poppins mb-3">Cepat Selesai</h3>
                    <p class="text-gray-600 text-sm">Sebagian besar service selesai dalam 1 hari kerja.</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-secondary-100 rounded-2xl flex items-center justify-center mx-auto mb-5">
                        <i class="fas fa-shield-alt text-3xl text-secondary-500"></i>
                    </div>
                    <h3 class="text-lg font-semibold font-poppins mb-3">Garansi Service</h3>
                    <p class="text-gray-600 text-sm">Setiap service dilengkapi garansi untuk ketenangan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Process Service --}}
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-secondary-100 text-secondary-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Proses</span>
                <h2 class="section-title">Alur Service</h2>
                <p class="section-subtitle">Proses mudah dan transparan untuk setiap perbaikan.</p>
            </div>

            <div class="grid md:grid-cols-5 gap-4 relative">
                <div class="text-center p-6">
                    <div class="w-12 h-12 bg-secondary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">1</div>
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-comments text-2xl text-secondary-500"></i>
                    </div>
                    <h3 class="font-semibold">Konsultasi</h3>
                    <p class="text-sm text-gray-600 mt-2">Konsultasi masalah HP Anda</p>
                </div>
                <div class="hidden md:flex items-center justify-center text-gray-300 text-2xl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="text-center p-6">
                    <div class="w-12 h-12 bg-secondary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">2</div>
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-search text-2xl text-secondary-500"></i>
                    </div>
                    <h3 class="font-semibold">Diagnosa</h3>
                    <p class="text-sm text-gray-600 mt-2">Diagnosa kerusakan menyeluruh</p>
                </div>
                <div class="hidden md:flex items-center justify-center text-gray-300 text-2xl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="text-center p-6">
                    <div class="w-12 h-12 bg-secondary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">3</div>
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-file-invoice text-2xl text-secondary-500"></i>
                    </div>
                    <h3 class="font-semibold">Persetujuan</h3>
                    <p class="text-sm text-gray-600 mt-2">Persetujuan harga dan perbaikan</p>
                </div>
                <div class="hidden md:flex items-center justify-center text-gray-300 text-2xl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="text-center p-6">
                    <div class="w-12 h-12 bg-secondary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">4</div>
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-wrench text-2xl text-secondary-500"></i>
                    </div>
                    <h3 class="font-semibold">Service</h3>
                    <p class="text-sm text-gray-600 mt-2">Proses perbaikan oleh teknisi</p>
                </div>
                <div class="hidden md:flex items-center justify-center text-gray-300 text-2xl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="text-center p-6">
                    <div class="w-12 h-12 bg-secondary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-lg">5</div>
                    <div class="w-16 h-16 bg-white rounded-2xl shadow-lg flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-mobile-alt text-2xl text-secondary-500"></i>
                    </div>
                    <h3 class="font-semibold">Pengambilan</h3>
                    <p class="text-sm text-gray-600 mt-2">Ambil HP yang sudah selesai</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Portfolio Section --}}
    <section class="py-20 bg-white" id="portfolio">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-accent-100 text-accent-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Portfolio</span>
                <h2 class="section-title">Hasil Pekerjaan</h2>
                <p class="section-subtitle">Beberapa hasil perbaikan yang telah kami kerjakan.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($portfolios as $item)
                    <div class="card overflow-hidden group">
                        <div class="h-48 bg-gray-200 rounded-xl mb-4 flex items-center justify-center text-gray-400 overflow-hidden">
                            @if ($item->after_image)
                                <img src="{{ asset('storage/' . $item->after_image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" loading="lazy">
                            @else
                                <i class="fas fa-image text-4xl"></i>
                            @endif
                        </div>
                        <span class="text-xs bg-secondary-100 text-secondary-600 px-3 py-1 rounded-full font-semibold">{{ $item->category }}</span>
                        <h3 class="text-lg font-semibold mt-3 font-poppins">{{ $item->title }}</h3>
                        <p class="text-gray-600 text-sm mt-2">{{ Str::limit($item->description, 100) }}</p>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 text-gray-400">
                        <i class="fas fa-images text-5xl mb-4"></i>
                        <p>Belum ada portfolio.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Testimonial Section --}}
    <section class="py-20 bg-gray-50" id="testimonials">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-block bg-secondary-100 text-secondary-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">Testimonial</span>
                <h2 class="section-title">Apa Kata Pelanggan</h2>
                <p class="section-subtitle">Kepercayaan pelanggan adalah prioritas utama kami.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($testimonials as $testimonial)
                    <div class="card">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 bg-secondary-200 rounded-full flex items-center justify-center text-secondary-600 font-bold text-lg mr-4">
                                {{ substr($testimonial->customer_name, 0, 1) }}
                            </div>
                            <div>
                                <h4 class="font-semibold">{{ $testimonial->customer_name }}</h4>
                                <div class="flex text-yellow-400 text-sm">
                                    @for ($i = 0; $i < $testimonial->rating; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600 leading-relaxed">"{{ $testimonial->message }}"</p>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12 text-gray-400">
                        <i class="fas fa-comments text-5xl mb-4"></i>
                        <p>Belum ada testimonial.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-gradient-to-r from-dark to-secondary-900 relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-10 left-10 w-72 h-72 bg-accent-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-secondary-500 rounded-full blur-3xl"></div>
        </div>
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-poppins text-white mb-6">HP Rusak? Jangan Tunggu Lama!</h2>
            <p class="text-xl text-gray-300 mb-8">Konsultasikan masalah HP Anda sekarang, gratis! Teknisi kami siap membantu.</p>
            <a href="https://wa.me/{{ $settings['whatsapp'] ?? '6281234567890' }}" target="_blank" class="btn-accent inline-flex items-center space-x-2 text-lg px-8 py-4">
                <i class="fab fa-whatsapp text-xl"></i>
                <span>Hubungi Teknisi Sekarang</span>
            </a>
        </div>
    </section>
@endsection
