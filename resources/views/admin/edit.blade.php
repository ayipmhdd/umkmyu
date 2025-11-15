@extends('admin.layout')

@section('title', 'Edit UMKM')

@section('content')
<div class="max-w-5xl mx-auto py-10">
    <h1 class="text-3xl font-bold text-[#EF4400] mb-6">Edit UMKM – {{ $umkm->name }}</h1>

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

        <form action="{{ route('umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Nama UMKM --}}
            <div>
                <label class="block font-semibold mb-1">Nama UMKM</label>
                <input type="text" name="name" value="{{ old('name', $umkm->name) }}" class="w-full border rounded-lg p-2">
            </div>

            {{-- Deskripsi Singkat --}}
            <div>
                <label class="block font-semibold mb-1">Deskripsi Singkat</label>
                <textarea name="short_description" rows="3" class="w-full border rounded-lg p-2">{{ old('short_description', $umkm->short_description) }}</textarea>
            </div>

            {{-- Tentang UMKM --}}
            <div>
                <label class="block font-semibold mb-1">Tentang UMKM</label>
                <textarea name="about" rows="4" class="w-full border rounded-lg p-2">{{ old('about', $umkm->about) }}</textarea>
            </div>

            {{-- Kategori --}}
            <div>
                <label class="block font-semibold mb-1">Kategori</label>
                <select name="category_id" class="w-full border rounded-lg p-2">
                    <option value="">-- Pilih Kategori --</option>
                    @forelse($categories as $cat)
                        <option value="{{ $cat->id }}"
                            {{ old('category_id', $umkm->category_id ?? '') == $cat->id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @empty
                        <option value="" disabled>Tidak ada kategori tersedia</option>
                    @endforelse
                </select>
            </div>


            {{-- Foto Utama --}}
            <div>
                <label class="block font-semibold mb-1">Foto Utama</label>
                <input type="file" name="primary_photo" class="w-full border p-2 rounded-lg">
                @if($umkm->primary_photo)
                <img src="{{ asset('storage/'.$umkm->primary_photo) }}" class="w-32 mt-2 rounded">
                @endif
            </div>

            {{-- Submit --}}
            <div class="flex justify-end pt-4">
                <button class="px-6 py-2 bg-[#EF4400] text-white rounded-lg hover:bg-orange-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
