@extends('layouts.admin')

@section('page-title', 'Dashboard')
@section('content')
    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-secondary-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Services</p>
                    <p class="text-3xl font-bold text-dark font-poppins mt-2">{{ $totalServices }}</p>
                </div>
                <div class="w-12 h-12 bg-secondary-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-tools text-xl text-secondary-500"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-accent-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Portfolios</p>
                    <p class="text-3xl font-bold text-dark font-poppins mt-2">{{ $totalPortfolios }}</p>
                </div>
                <div class="w-12 h-12 bg-accent-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-images text-xl text-accent-500"></i>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-green-500">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">Total Testimonials</p>
                    <p class="text-3xl font-bold text-dark font-poppins mt-2">{{ $totalTestimonials }}</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                    <i class="fas fa-comments text-xl text-green-500"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
