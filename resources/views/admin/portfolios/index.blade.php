@extends('layouts.admin')

@section('page-title', 'Manage Portfolios')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Portfolios</h2>
        <a href="{{ route('admin.portfolios.create') }}" class="btn-primary text-sm inline-flex items-center space-x-2">
            <i class="fas fa-plus"></i>
            <span>Tambah Portfolio</span>
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Title & URL</th>
                        <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Category</th>
                        <th class="text-right px-6 py-4 text-sm font-semibold text-gray-600">Actions</th>
                    </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($portfolios as $portfolio)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4">
                            <div class="font-medium">{{ $portfolio->title }}</div>
                            <div class="text-xs text-gray-400 mt-0.5">/portfolio/{{ $portfolio->slug }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="bg-secondary-100 text-secondary-600 px-3 py-1 rounded-full text-xs font-semibold">{{ $portfolio->category }}</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.portfolios.edit', $portfolio) }}" class="text-secondary-500 hover:text-secondary-600 mr-3">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.portfolios.destroy', $portfolio) }}" method="POST" class="inline" onsubmit="return confirm('Hapus portfolio ini?')">
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
                        <td colspan="3" class="px-6 py-12 text-center text-gray-400">
                            <i class="fas fa-images text-4xl mb-3 block"></i>
                            Belum ada portfolio.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $portfolios->links() }}
    </div>
@endsection
