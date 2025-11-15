@extends('admin.layout')

@section('title', 'Data UMKM')

@section('content')
<div class="max-w-7xl mx-auto py-10">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-[#EF4400]">Daftar UMKM</h1>
        <a href="{{ route('admin.umkm.create') }}" class="px-4 py-2 bg-[#EF4400] text-white rounded-lg hover:bg-orange-700 transition">
            + Tambah UMKM
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white p-6 rounded-xl shadow overflow-x-auto">
        <table class="w-full table-auto border">
            <thead>
                <tr class="border-b bg-gray-100 text-left">
                    <th class="p-3">Foto Utama</th>
                    <th class="p-3">Nama</th>
                    <th class="p-3">Kategori</th>
                    <th class="p-3">Alamat</th>
                    <th class="p-3">Deskripsi</th>
                    <th class="p-3">Tentang UMKM</th>
                    <th class="p-3">Hari Buka</th>
                    <th class="p-3">Jam Operasional</th>
                    <th class="p-3">Instagram</th>
                    <th class="p-3">WhatsApp</th>
                    <th class="p-3">Slug</th>
                    <th class="p-3">Latitude</th>
                    <th class="p-3">Longitude</th>
                    <th class="p-3">Gallery</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($umkms as $u)
                <tr class="border-b hover:bg-gray-50 align-top">
                    <!-- Foto Utama -->
                    <td class="p-3">
                        @if ($u->primary_photo)
                        <img src="{{ asset('storage/'.$u->primary_photo) }}" class="w-16 h-16 object-cover rounded">
                        @else
                        <span class="text-gray-400 text-sm">Tidak ada foto</span>
                        @endif
                    </td>

                    <!-- Nama -->
                    <td class="p-3 font-semibold">{{ $u->name }}</td>

                    <!-- Kategori -->
                    <td class="p-3">{{ $u->category->name ?? '-' }}</td>

                    <!-- Alamat -->
                    <td class="p-3">{{ $u->alamat ?? '-' }}</td>

                    <!-- Deskripsi -->
                    <td class="p-3">{{ $u->description ?? '-' }}</td>

                    <!-- Tentang UMKM -->
                    <td class="p-3">{{ $u->about ?? '-' }}</td>

                    <!-- Hari Buka -->
                    <td class="p-3">{{ $u->hari_buka ?? '-' }}</td>

                    <!-- Jam Operasional -->
                    <td class="p-3">{{ $u->jam_operasional ?? '-' }}</td>

                    <!-- Instagram -->
                    <td class="p-3">{{ $u->instagram ?? '-' }}</td>

                    <!-- WhatsApp -->
                    <td class="p-3">{{ $u->whatsapp ?? '-' }}</td>

                    <!-- Slug -->
                    <td class="p-3">{{ $u->slug ?? '-' }}</td>

                    <!-- Latitude -->
                    <td class="p-3">{{ $u->latitude ?? '-' }}</td>

                    <!-- Longitude -->
                    <td class="p-3">{{ $u->longitude ?? '-' }}</td>

                    <!-- Gallery -->
                    <td class="p-3 flex flex-wrap gap-2">
                        @if ($u->photos && $u->photos->count() > 0)
                        @foreach ($u->photos as $photo)
                        <img src="{{ asset('storage/'.$photo->photo) }}" class="w-12 h-12 object-cover rounded">
                        @endforeach
                        @else
                        <span class="text-gray-400 text-sm">Tidak ada gallery</span>
                        @endif
                    </td>

                    <!-- Aksi -->
                    <td class="p-3 flex flex-col gap-2">
                        <a href="{{ route('admin.umkm.edit', $u->id) }}" class="text-blue-600 hover:underline">Edit</a>

                        <form action="{{ route('admin.umkm.destroy', $u->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 hover:underline" onclick="return confirm('Yakin ingin menghapus UMKM ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $umkms->links() }}
        </div>
    </div>
</div>
@endsection

