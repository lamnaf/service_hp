@extends('layouts.main')

@section('title', 'Tentang Kami | HP Service Pro')

@section('content')
    <section class="py-20 bg-gradient-to-br from-dark to-secondary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Tentang Kami</h1>
            <p class="text-xl text-gray-300">Mitra terpercaya untuk perbaikan smartphone Anda</p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold font-poppins text-dark mb-6">Profil {{ $settings['business_name'] ?? 'HP Service Pro' }}</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        {{ $settings['business_name'] ?? 'HP Service Pro' }} adalah penyedia jasa perbaikan smartphone profesional yang telah berpengalaman lebih dari 5 tahun. Kami berkomitmen memberikan solusi terbaik untuk setiap masalah perangkat mobile Anda.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Dengan teknisi yang berpengalaman dan tersertifikasi, kami menangani berbagai merek dan jenis kerusakan - dari masalah software hingga perbaikan hardware yang kompleks.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Kami percaya bahwa setiap pelanggan berhak mendapatkan layanan berkualitas dengan harga yang transparan dan garansi yang jelas.
                    </p>
                </div>
                <div class="bg-gray-100 rounded-2xl h-80 flex items-center justify-center">
                    <i class="fas fa-building text-6xl text-gray-300"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="p-8 bg-white rounded-2xl shadow-sm">
                    <i class="fas fa-eye text-3xl text-secondary-500 mb-4"></i>
                    <h3 class="text-2xl font-bold font-poppins mb-4">Visi</h3>
                    <p class="text-gray-600 leading-relaxed">Menjadi pusat layanan perbaikan smartphone terdepan di Indonesia yang dikenal dengan kualitas, kecepatan, dan kepercayaan.</p>
                </div>
                <div class="p-8 bg-white rounded-2xl shadow-sm">
                    <i class="fas fa-rocket text-3xl text-accent-500 mb-4"></i>
                    <h3 class="text-2xl font-bold font-poppins mb-4">Misi</h3>
                    <ul class="text-gray-600 space-y-3">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-green-500 mt-1"></i>
                            <span>Memberikan layanan perbaikan berkualitas tinggi</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-green-500 mt-1"></i>
                            <span>Mengutamakan kepuasan dan kepercayaan pelanggan</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-green-500 mt-1"></i>
                            <span>Menerapkan harga transparan tanpa biaya tersembunyi</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-green-500 mt-1"></i>
                            <span>Terus mengikuti perkembangan teknologi terbaru</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
