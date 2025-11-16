

    <!-- UMKM Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($umkms as $umkm)
            <div x-show="selectedCategory==='Semua' || selectedCategory==='{{ $umkm->category->name }}'"
                 x-transition
                 class="bg-white p-2 rounded-lg shadow-lg border-2 border-[#EF4400] flex flex-col">
                 
                <div class="relative mb-4">
                    <img src="{{ asset('storage/' . $umkm->primary_photo) }}" alt="{{ $umkm->name }}" class="w-full h-40 object-cover rounded-md">
                    <div class="absolute top-4 right-4 bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full z-10">
                        {{ $umkm->category->name }}
                    </div>
                </div>

                <h3 class="text-xl font-normal text-[#EF4400] font-[Anton]">
                    {{ $umkm->name }}
                </h3>

                <p class="text-gray-500 mb-2">
                    {{ $umkm->short_description }}
                </p>

                <a href="{{ route('umkm.show', $umkm->id) }}" class="mt-auto bg-[#EF4400] text-white py-2 px-4 rounded-lg w-full text-center">
                    Lihat Detail
                </a>
            </div>
        @endforeach
    </div>
