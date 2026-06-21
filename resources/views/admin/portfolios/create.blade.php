@extends('layouts.admin')

@section('page-title', 'Tambah Portfolio')
@section('content')
    <div class="max-w-2xl">
        <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-sm p-8 space-y-6">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none @error('title') border-red-500 @enderror">
                @error('title') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                <input type="text" id="slug" readonly placeholder="Akan dibuat otomatis" class="w-full px-4 py-3 rounded-lg border border-gray-200 bg-gray-50 text-gray-500 cursor-not-allowed">
                <p class="text-xs text-gray-400 mt-1">Slug akan dibuat otomatis berdasarkan title.</p>
            </div>
            @push('scripts')
                <script>
                    document.getElementById('title')?.addEventListener('input', function () {
                        const slug = document.getElementById('slug');
                        if (slug) slug.value = this.value.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
                    });
                </script>
            @endpush
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <select name="category" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
                    <option value="LCD" {{ old('category') == 'LCD' ? 'selected' : '' }}>LCD</option>
                    <option value="Battery" {{ old('category') == 'Battery' ? 'selected' : '' }}>Battery</option>
                    <option value="Software" {{ old('category') == 'Software' ? 'selected' : '' }}>Software</option>
                    <option value="Hardware" {{ old('category') == 'Hardware' ? 'selected' : '' }}>Hardware</option>
                </select>
                @error('category') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Before Image</label>
                <input type="file" name="before_image" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
                @error('before_image') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">After Image</label>
                <input type="file" name="after_image" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
                @error('after_image') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea name="description" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">{{ old('description') }}</textarea>
            </div>
            <div class="flex justify-end space-x-4">
                <a href="{{ route('admin.portfolios.index') }}" class="px-6 py-3 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-50 transition">Batal</a>
                <button type="submit" class="btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
