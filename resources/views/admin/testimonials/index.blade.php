@extends('layouts.admin')

@section('page-title', 'Manage Testimonials')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-semibold">Testimonials</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="btn-primary text-sm inline-flex items-center space-x-2">
            <i class="fas fa-plus"></i>
            <span>Tambah Testimonial</span>
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Customer</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Rating</th>
                    <th class="text-left px-6 py-4 text-sm font-semibold text-gray-600">Message</th>
                    <th class="text-right px-6 py-4 text-sm font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($testimonials as $testimonial)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">{{ $testimonial->customer_name }}</td>
                        <td class="px-6 py-4">
                            <div class="flex text-yellow-400 text-sm">
                                @for ($i = 0; $i < $testimonial->rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                        </td>
                        <td class="px-6 py-4 text-gray-600 text-sm">{{ Str::limit($testimonial->message, 60) }}</td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="text-secondary-500 hover:text-secondary-600 mr-3">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" class="inline" onsubmit="return confirm('Hapus testimonial ini?')">
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
                            <i class="fas fa-comments text-4xl mb-3 block"></i>
                            Belum ada testimonial.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $testimonials->links() }}
    </div>
@endsection
