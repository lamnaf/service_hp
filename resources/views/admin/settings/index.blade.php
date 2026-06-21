@extends('layouts.admin')

@section('page-title', 'Settings')
@section('content')
    <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data" class="max-w-2xl bg-white rounded-2xl shadow-sm p-8 space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Business Name</label>
            <input type="text" name="business_name" value="{{ $settings['business_name'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
            <textarea name="address" rows="3" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">{{ $settings['address'] ?? '' }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
            <input type="text" name="phone" value="{{ $settings['phone'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">WhatsApp Number (without + sign)</label>
            <input type="text" name="whatsapp" value="{{ $settings['whatsapp'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Instagram URL</label>
            <input type="text" name="instagram" value="{{ $settings['instagram'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Facebook URL</label>
            <input type="text" name="facebook" value="{{ $settings['facebook'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Open Hours</label>
            <input type="text" name="open_hours" value="{{ $settings['open_hours'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Meta Title (SEO)</label>
            <input type="text" name="meta_title" value="{{ $settings['meta_title'] ?? '' }}" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description (SEO)</label>
            <textarea name="meta_description" rows="3" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-secondary-500 outline-none">{{ $settings['meta_description'] ?? '' }}</textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="btn-primary">Simpan Pengaturan</button>
        </div>
    </form>
@endsection
