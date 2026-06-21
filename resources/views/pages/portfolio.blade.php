@extends('layouts.main')

@section('title', 'Portfolio Service HP | HP Service Pro')
@section('meta_title', 'Portfolio — HP Service Pro')
@section('meta_description', 'Lihat hasil perbaikan smartphone kami — LCD, Battery, Software, dan Hardware.')

@section('content')
    <section class="py-20 bg-gradient-to-br from-dark to-secondary-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold font-poppins mb-4">Portfolio</h1>
            <p class="text-xl text-gray-300">Hasil karya dan perbaikan yang telah kami kerjakan</p>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-3 mb-12 justify-center">
                <a href="{{ route('portfolio', ['category' => 'all']) }}"
                   class="px-6 py-2 rounded-full font-semibold shadow-sm transition duration-300
                   {{ $category === 'all' ? 'bg-secondary-500 text-white' : 'bg-white text-gray-600 hover:bg-secondary-500 hover:text-white' }}">
                    All
                </a>
                @foreach ($categories as $cat)
                    <a href="{{ route('portfolio', ['category' => $cat]) }}"
                       class="px-6 py-2 rounded-full font-semibold shadow-sm transition duration-300
                       {{ $category === $cat ? 'bg-secondary-500 text-white' : 'bg-white text-gray-600 hover:bg-secondary-500 hover:text-white' }}">
                        {{ $cat }}
                    </a>
                @endforeach
            </div>

            <div x-data="{ open: false, portfolio: {} }">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($portfolios as $portfolio)
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden group">
                            <div class="h-52 bg-gray-200 overflow-hidden relative">
                                @if ($portfolio->after_image)
                                    <img src="{{ asset('storage/' . $portfolio->after_image) }}"
                                         alt="{{ $portfolio->title }}"
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                                         loading="lazy">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                                        <i class="fas fa-image text-5xl"></i>
                                    </div>
                                @endif
                                <span class="absolute top-3 left-3 bg-secondary-500 text-white text-xs px-3 py-1 rounded-full font-semibold shadow">
                                    {{ $portfolio->category }}
                                </span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-lg font-semibold font-poppins mb-2 line-clamp-2">{{ $portfolio->title }}</h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ Str::limit($portfolio->description, 100) }}</p>
                                <button @click="open = true; portfolio = {{ json_encode($portfolio->only(['title', 'category', 'description', 'before_image', 'after_image'])) }}"
                                        class="inline-flex items-center gap-2 text-secondary-500 hover:text-secondary-600 font-semibold text-sm transition-colors duration-300">
                                    Lihat Detail
                                    <i class="fas fa-arrow-right text-xs"></i>
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-3 text-center py-12 text-gray-400">
                            <i class="fas fa-images text-5xl mb-4"></i>
                            <p>Belum ada portfolio.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-12">
                    {{ $portfolios->appends(request()->query())->links('vendor.pagination.tailwind') }}
                </div>

                <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center p-4"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     style="display: none;">
                    <div class="fixed inset-0 bg-black/60" @click="open = false"></div>
                    <div class="relative bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl z-10"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="scale-95 opacity-0"
                         x-transition:enter-end="scale-100 opacity-100"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="scale-100 opacity-100"
                         x-transition:leave-end="scale-95 opacity-0">
                        <button @click="open = false" class="absolute top-4 right-4 w-10 h-10 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition z-10">
                            <i class="fas fa-times text-gray-500"></i>
                        </button>
                        <div class="grid md:grid-cols-2 gap-0">
                            <div class="h-64 md:h-full bg-gray-100 overflow-hidden rounded-t-2xl md:rounded-l-2xl md:rounded-tr-none">
                                <template x-if="portfolio.before_image">
                                    <img :src="'{{ asset('storage') }}/' + portfolio.before_image"
                                         :alt="portfolio.title"
                                         class="w-full h-full object-cover">
                                </template>
                                <template x-if="!portfolio.before_image">
                                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                                        <i class="fas fa-image text-5xl"></i>
                                    </div>
                                </template>
                            </div>
                            <div class="h-64 md:h-full bg-gray-100 overflow-hidden rounded-b-2xl md:rounded-r-2xl md:rounded-bl-none">
                                <template x-if="portfolio.after_image">
                                    <img :src="'{{ asset('storage') }}/' + portfolio.after_image"
                                         :alt="portfolio.title"
                                         class="w-full h-full object-cover">
                                </template>
                                <template x-if="!portfolio.after_image">
                                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                                        <i class="fas fa-image text-5xl"></i>
                                    </div>
                                </template>
                            </div>
                        </div>
                        <div class="p-6 md:p-8">
                            <span class="inline-block bg-secondary-100 text-secondary-600 text-xs px-3 py-1 rounded-full font-semibold mb-3"
                                  x-text="portfolio.category"></span>
                            <h3 class="text-xl md:text-2xl font-bold font-poppins mb-3" x-text="portfolio.title"></h3>
                            <p class="text-gray-600 text-sm leading-relaxed" x-text="portfolio.description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


