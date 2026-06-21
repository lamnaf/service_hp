@props(['settings'])

<footer class="bg-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div>
                <h3 class="text-2xl font-bold font-poppins mb-4">{{ $settings['business_name'] ?? 'HP Service Pro' }}</h3>
                <p class="text-gray-400 leading-relaxed">Solusi service HP profesional dengan teknisi berpengalaman. Kami siap membantu memperbaiki smartphone Anda.</p>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4 font-poppins">Kontak</h4>
                <ul class="space-y-3 text-gray-400">
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-map-marker-alt text-accent-500 w-5"></i>
                        <span>{{ $settings['address'] ?? 'Jakarta Selatan' }}</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-phone text-accent-500 w-5"></i>
                        <span>{{ $settings['phone'] ?? '021-12345678' }}</span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-clock text-accent-500 w-5"></i>
                        <span>{{ $settings['open_hours'] ?? 'Sen - Sab: 09:00 - 18:00' }}</span>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4 font-poppins">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    @if (!empty($settings['whatsapp']))
                        <a href="https://wa.me/{{ $settings['whatsapp'] }}" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-accent-500 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    @endif
                    @if (!empty($settings['instagram']))
                        <a href="{{ $settings['instagram'] }}" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-accent-500 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                    @if (!empty($settings['facebook']))
                        <a href="{{ $settings['facebook'] }}" target="_blank" class="w-10 h-10 bg-gray-700 hover:bg-accent-500 rounded-full flex items-center justify-center transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-gray-500 text-sm">
                &copy; {{ date('Y') }} {{ $settings['business_name'] ?? 'HP Service Pro' }}. All rights reserved.
            </p>
        </div>
    </div>
</footer>
