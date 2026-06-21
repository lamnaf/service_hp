@extends('layouts.admin')

@section('page-title', 'Manage Services')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Services</h2>
        <a href="{{ route('admin.services.create') }}" class="btn-primary text-sm inline-flex items-center space-x-2">
            <i class="fas fa-plus"></i>
            <span>Tambah Service</span>
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Title</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Price</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Slug</th>
                    <th class="text-right px-6 py-4 text-sm font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($services as $service)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $service->title }}</td>
                        <td class="px-6 py-4">Rp {{ number_format($service->price, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 text-gray-500 text-sm">{{ $service->slug }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.services.edit', $service) }}" class="text-secondary-500 hover:text-secondary-600 mr-3">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="inline" onsubmit="return confirm('Hapus service ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-600">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-12 text-center text-gray-400">
                            <i class="fas fa-tools text-4xl mb-3 block"></i>
                            Belum ada service.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $services->links() }}
    </div>
@endsection
