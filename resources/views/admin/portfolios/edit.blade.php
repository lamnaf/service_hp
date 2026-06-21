@extends('layouts.admin')

@section('page-title', 'Edit Portfolio')
@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm p-8 space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $portfolio->title) }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none @error('title') border-red-500 @enderror">
                @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                <input type="text" value="{{ $portfolio->slug }}" readonly class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 text-gray-500 cursor-not-allowed">
                <p class="text-xs text-gray-400 mt-1">Slug akan diupdate otomatis saat title berubah.</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select name="category" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
                    @foreach (['LCD', 'Battery', 'Software', 'Hardware'] as $cat)
                        <option value="{{ $cat }}" {{ (old('category', $portfolio->category) == $cat) ? 'selected' : '' }}>{{ $cat }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Before Image</label>
                @if ($portfolio->before_image)
                    <div class="mb-2"><img src="{{ asset('storage/' . $portfolio->before_image) }}" class="h-20 rounded"></div>
                @endif
                <input type="file" name="before_image" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">After Image</label>
                @if ($portfolio->after_image)
                    <div class="mb-2"><img src="{{ asset('storage/' . $portfolio->after_image) }}" class="h-20 rounded"></div>
                @endif
                <input type="file" name="after_image" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">{{ old('description', $portfolio->description) }}</textarea>
            </div>
            <div class="flex justify-end space-x-4">
                <a href="{{ route('admin.portfolios.index') }}" class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition">Batal</a>
                <button type="submit" class="btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
