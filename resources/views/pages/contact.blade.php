@extends('layouts.main')

@section('title', 'Hubungi Kami | HP Service Pro')

@section('content')
    <section class="py-20 bg-gradient-to-br from-dark to-secondary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Hubungi Kami</h1>
            <p class="text-xl text-gray-300">Konsultasi gratis, hubungi teknisi kami sekarang</p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold font-poppins text-dark mb-8">Informasi Kontak</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-secondary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-xl text-secondary-500"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Alamat</h3>
                                <p class="text-gray-600">{{ $settings['address'] ?? 'Jakarta Selatan' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-secondary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-xl text-secondary-500"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Telepon</h3>
                                <p class="text-gray-600">{{ $settings['phone'] ?? '021-12345678' }}</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-secondary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-xl text-secondary-500"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">WhatsApp</h3>
                                <a href="https://wa.me/{{ $settings['whatsapp'] ?? '6281234567890' }}" target="_blank" class="text-secondary-500 hover:text-secondary-600">
                                    {{ $settings['whatsapp'] ?? '6281234567890' }}
                                </a>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-secondary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-clock text-xl text-secondary-500"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Jam Operasional</h3>
                                <p class="text-gray-600">{{ $settings['open_hours'] ?? 'Senin - Sabtu: 09:00 - 18:00' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl font-bold font-poppins text-dark mb-8">Kirim Pesan</h2>
                    <form class="space-y-4" x-data @submit.prevent="window.open('https://wa.me/{{ $settings['whatsapp'] ?? '6281234567890' }}?text=' + encodeURIComponent('Halo, saya ingin konsultasi tentang HP saya. Nama: ' + document.getElementById('name').value + ', Pesan: ' + document.getElementById('message').value), '_blank')">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                            <input type="text" id="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 focus:border-secondary-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">No. WhatsApp</label>
                            <input type="text" id="phone" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 focus:border-secondary-500 outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" rows="4" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 focus:border-secondary-500 outline-none transition"></textarea>
                        </div>
                        <button type="submit" class="btn-accent w-full inline-flex items-center justify-center space-x-2">
                            <i class="fab fa-whatsapp"></i>
                            <span>Kirim via WhatsApp</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
