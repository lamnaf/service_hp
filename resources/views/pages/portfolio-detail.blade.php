@extends('layouts.main')

@section('title', 'Service ' . $portfolio->title . ' | HP Service Pro')
@section('meta_title', 'Service ' . $portfolio->title . ' — HP Service Pro')
@section('meta_description', 'Jasa service HP ' . $portfolio->title . ' dengan pengerjaan cepat dan bergaransi.')

@section('content')
    <section class="py-20 bg-gradient-to-br from-dark to-secondary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-2 text-gray-300 hover:text-white transition mb-6">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali ke Portfolio</span>
            </a>
            <h1 class="text-3xl md:text-5xl font-bold font-poppins mb-4">{{ $portfolio->title }}</h1>
            <span class="inline-block bg-secondary-500 text-white text-sm px-4 py-1.5 rounded-full font-semibold">{{ $portfolio->category }}</span>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($portfolio->before_image || $portfolio->after_image)
                <div class="mb-16">
                    <h2 class="text-2xl md:text-3xl font-bold font-poppins text-center mb-10">Before & After</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="h-64 md:h-80 bg-gray-200 overflow-hidden">
                                @if ($portfolio->before_image)
                                    <img src="{{ asset('storage/' . $portfolio->before_image) }}"
                                         alt="Before {{ $portfolio->title }}"
                                         class="w-full h-full object-cover"
                                         loading="lazy">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                                        <i class="fas fa-image text-5xl"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4 text-center">
                                <span class="bg-red-100 text-red-600 px-4 py-1 rounded-full text-sm font-semibold">Before</span>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                            <div class="h-64 md:h-80 bg-gray-200 overflow-hidden">
                                @if ($portfolio->after_image)
                                    <img src="{{ asset('storage/' . $portfolio->after_image) }}"
                                         alt="After {{ $portfolio->title }}"
                                         class="w-full h-full object-cover"
                                         loading="lazy">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                                        <i class="fas fa-image text-5xl"></i>
                                    </div>
                                @endif
                            </div>
                            <div class="p-4 text-center">
                                <span class="bg-green-100 text-green-600 px-4 py-1 rounded-full text-sm font-semibold">After</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mb-12">
                    <span class="inline-block bg-gray-200 text-gray-500 px-6 py-2 rounded-full text-lg font-bold">VS</span>
                </div>
            @endif

            <div class="bg-white rounded-2xl shadow-lg p-8 md:p-10">
                <h2 class="text-2xl font-bold font-poppins mb-4">Deskripsi</h2>
                <p class="text-gray-600 leading-relaxed whitespace-pre-line">{{ $portfolio->description }}</p>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('portfolio') }}"
                   class="inline-flex items-center gap-2 btn-primary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Portfolio
                </a>
            </div>
        </div>
    </section>
@endsection
