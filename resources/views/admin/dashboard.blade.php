@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')

<div class="bg-white p-6 rounded-lg shadow mb-8">
    <h3 class="text-lg font-semibold">Selamat datang di Dashboard Admin</h3>
    <p class="mt-2 text-gray-600">
        Gunakan menu di kiri untuk mengatur data UMKM.
    </p>
</div>

<div class="max-w-5xl mx-auto">
    <h1 class="text-3xl font-bold text-[#EF4400] mb-6">Input Data UMKM</h1>

    <div class="bg-white rounded-xl shadow p-8 border border-[#EF4400]/30">

        {{-- Form Input UMKM --}}
        <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Nama UMKM --}}
            <div>
                <label class="block font-semibold mb-1">Nama UMKM</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>

            {{-- Deskripsi Singkat --}}
            <div>
                <label class="block font-semibold mb-1">Deskripsi Singkat</label>
                <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg p-2" required>{{ old('description') }}</textarea>
            </div>

            {{-- Tentang UMKM --}}
            <div>
                <label class="block font-semibold mb-1">Tentang UMKM</label>
                <textarea name="about" rows="4" class="w-full border border-gray-300 rounded-lg p-2" required>{{ old('about') }}</textarea>
            </div>

            {{-- Kategori --}}
            <div>
                <label class="block font-semibold mb-1">Kategori</label>
                <select name="category_id" class="w-full border border-gray-300 rounded-lg p-2" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                        {{ $cat->name }}
                    </option>
                    @endforeach
                </select>
            </div>

            {{-- Foto Utama --}}
            <div>
                <label class="block font-semibold mb-1">Foto Utama</label>
                <input type="file" name="primary_photo" class="w-full border p-2 rounded-lg" required>
            </div>

            {{-- Foto Tambahan (Gallery) --}}
            <div>
                <label class="block font-semibold mb-1">Foto Tambahan (Gallery)</label>
                <input type="file" name="gallery[]" class="w-full border p-2 rounded-lg" multiple>
                <p class="text-sm text-gray-500 mt-1">Bisa pilih lebih dari satu foto.</p>
            </div>

            {{-- Maps (Latitude & Longitude) --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Latitude</label>
                    <input type="text" name="latitude" value="{{ old('latitude') }}" class="w-full border border-gray-300 rounded-lg p-2" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Longitude</label>
                    <input type="text" name="longitude" value="{{ old('longitude') }}" class="w-full border border-gray-300 rounded-lg p-2" required>
                </div>
            </div>

            {{-- Alamat --}}
            <div>
                <label class="block font-semibold mb-1">Alamat Lengkap</label>
                <textarea name="alamat" rows="2" class="w-full border border-gray-300 rounded-lg p-2" required>{{ old('alamat') }}</textarea>
            </div>

            {{-- Hari Buka & Jam Operasional --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Hari Buka</label>
                    <input type="text" name="hari_buka" value="{{ old('hari_buka') }}" class="w-full border border-gray-300 rounded-lg p-2" required>
                </div>
                <div>
                    <label class="block font-semibold mb-1">Jam Operasional</label>
                    <input type="text" name="jam_operasional" value="{{ old('jam_operasional') }}" class="w-full border border-gray-300 rounded-lg p-2" required>
                </div>
            </div>

            {{-- Sosial Media --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Instagram (opsional)</label>
                    <input type="text" name="instagram" value="{{ old('instagram') }}" class="w-full border border-gray-300 rounded-lg p-2">
                </div>

                <div>
                    <label class="block font-semibold mb-1">WhatsApp (opsional)</label>
                    <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" class="w-full border border-gray-300 rounded-lg p-2">
                </div>
            </div>

            {{-- Submit Button --}}
            <div class="flex justify-end pt-4">
                <button class="px-6 py-2 bg-[#EF4400] text-white font-semibold rounded-lg hover:bg-[#d63b00]">
                    Simpan UMKM
                </button>
            </div>

        </form>

    </div>
</div>

@endsection

