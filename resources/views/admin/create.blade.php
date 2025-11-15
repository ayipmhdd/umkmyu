@extends('admin.layout')

@section('title', 'Tambah UMKM')

@section('content')
<div class="max-w-5xl mx-auto py-10">
    <h1 class="text-3xl font-bold text-[#EF4400] mb-6">Tambah UMKM Baru</h1>

    <div class="bg-white rounded-xl shadow p-8 border border-[#EF4400]/30">

        {{-- Error Validation --}}
        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
            <ul class="list-disc ml-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            {{-- Nama UMKM --}}
            <div>
                <label class="block font-semibold mb-1">Nama UMKM</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded-lg p-2">
            </div>

            {{-- Deskripsi Singkat --}}
            <div>
                <label class="block font-semibold mb-1">Deskripsi Singkat</label>
                <textarea name="short_description" rows="3" class="w-full border rounded-lg p-2">{{ old('short_description') }}</textarea>
            </div>

            {{-- Tentang UMKM --}}
            <div>
                <label class="block font-semibold mb-1">Tentang UMKM</label>
                <textarea name="about" rows="4" class="w-full border rounded-lg p-2">{{ old('about') }}</textarea>
            </div>

            {{-- Kategori --}}
            <div>
                <label class="block font-semibold mb-1">Kategori</label>
                <select name="category_id" class="w-full border rounded-lg p-2">
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
                <input type="file" name="primary_photo" class="w-full border p-2 rounded-lg">
            </div>

            {{-- Gallery --}}
            <div>
                <label class="block font-semibold mb-1">Foto Tambahan (Gallery)</label>
                <input type="file" name="gallery[]" class="w-full border p-2 rounded-lg" multiple>
            </div>

            {{-- Latitude & Longitude --}}
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block font-semibold mb-1">Latitude</label>
                    <input type="text" name="latitude" value="{{ old('latitude') }}" class="w-full border rounded-lg p-2" readonly>
                </div>
                <div>
                    <label class="block font-semibold mb-1">Longitude</label>
                    <input type="text" name="longitude" value="{{ old('longitude') }}" class="w-full border rounded-lg p-2" readonly>
                </div>
            </div>

            {{-- Maps --}}
            <div class="mb-4">
                <label class="block font-semibold mb-1">Pilih Lokasi di Peta</label>
                <div id="map" class="w-full h-64 rounded-lg border"></div>
            </div>

            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
            <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
            <script>
                // Default koordinat, pakai old value kalau ada
                let defaultLat = {{ old('latitude', '-6.200000') }};
                let defaultLng = {{ old('longitude', '106.816666') }};

                const map = L.map('map').setView([defaultLat, defaultLng], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap contributors'
                }).addTo(map);

                // Marker awal
                let marker = L.marker([defaultLat, defaultLng], {draggable:true}).addTo(map);

                // Fungsi update input
                function updateInputs(lat, lng) {
                    document.querySelector('input[name="latitude"]').value = lat.toFixed(6);
                    document.querySelector('input[name="longitude"]').value = lng.toFixed(6);
                }

                // Update saat marker digeser
                marker.on('dragend', function(e){
                    let pos = marker.getLatLng();
                    updateInputs(pos.lat, pos.lng);
                });

                // Update saat klik peta
                map.on('click', function(e){
                    marker.setLatLng(e.latlng);
                    updateInputs(e.latlng.lat, e.latlng.lng);
                });

                // Inisialisasi input dengan marker awal
                updateInputs(defaultLat, defaultLng);
            </script>

            {{-- Alamat --}}
            <div>
                <label class="block font-semibold mb-1">Alamat Lengkap</label>
                <textarea name="alamat" rows="2" class="w-full border rounded-lg p-2">{{ old('alamat') }}</textarea>
            </div>

            {{-- Hari Buka & Jam Operasional --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Hari Buka</label>
                    <input type="text" name="open_days" value="{{ old('open_days') }}" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block font-semibold mb-1">Jam Operasional</label>
                    <input type="text" name="open_hours" value="{{ old('open_hours') }}" class="w-full border rounded-lg p-2">
                </div>
            </div>

            {{-- Sosial Media --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block font-semibold mb-1">Instagram</label>
                    <input type="text" name="instagram" value="{{ old('instagram') }}" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block font-semibold mb-1">WhatsApp</label>
                    <input type="text" name="whatsapp" value="{{ old('whatsapp') }}" class="w-full border rounded-lg p-2">
                </div>
            </div>

            {{-- Submit --}}
            <div class="flex justify-end pt-4">
                <button class="px-6 py-2 bg-[#EF4400] text-white rounded-lg hover:bg-orange-700 transition">
                    Simpan UMKM
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
