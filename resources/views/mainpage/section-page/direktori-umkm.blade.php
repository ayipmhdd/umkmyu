<!-- New Text with Gradient and Anton Font (Bold) -->
<section class="max-w-7xl mx-auto px-6 py-8 text-center">
    <h2
        class="text-3xl sm:text-5xl font-[Anton] font-normal text-[#EF4400] flex items-center justify-center flex-wrap">
        <span>SELAMAT DATANG DI</span>
        <img src="{{ asset('assets/tag-logo.png') }}" alt="Yu" class="h-[1.86em] w-auto object-contain mt-[0.14em] ml-[0.2em]" />
    </h2>

    <p class="text-base sm:text-xl text-gray-800 max-w-3xl mx-auto leading-relaxed">
        Temukan berbagai UMKM lokal terbaik yang siap mendukung ekonomi sekitar Anda. Jelajahi lebih banyak dan
        bantu mereka berkembang!
    </p>
</section>

<!-- Filter Section Positioned on the Right -->
<section id="menu" class="max-w-7xl mx-auto px-8 py-12 mt-1 pt-1">

    <div class="flex flex-col sm:flex-row justify-between items-center mb-8">
        <div class="flex flex-wrap sm:flex-nowrap space-x-0 sm:space-x-4 gap-4 sm:gap-0">
            {{-- <button
                class="flex items-center bg-white text-[#EF4400] px-4 py-2 rounded-full shadow-md hover:bg-[#F46100] focus:outline-none focus:ring-2 focus:ring-[#EF4400]">
                <img src="{{ asset('assets/filter.svg') }}" alt="Filter Icon" class="w-5 h-5 mr-3">
                <span class="font-bold">Filter</span>
            </button> --}}
            <!-- Filter Button -->
            <div x-data="{ open: false, active: 'Semua' }" class="relative inline-block w-full sm:w-auto">
                <button @click="open = !open" 
                    class="w-full sm:w-auto relative gap-2 flex items-center bg-white px-4 py-2 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-[#EF4400]">
                    <span class="font-bold text-[#EF4400]">Jenis UMKM</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 transition-transform" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="black">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 9l6 6 6-6" />
                    </svg>
                </button>

                <!-- Dropdown Kategori -->
                <div x-show="open" @click.away="open = false" x-transition
                    class="mt-2 bg-white shadow-lg rounded-xl p-4 z-50 w-full sm:w-auto">
                    <div class="flex flex-nowrap sm:flex-wrap overflow-x-auto justify-start space-x-4 sm:space-x-8 no-scrollbar">
                        <button @click="active='Semua'; open=false" :class="{ 'text-[#EF4400] font-bold': active==='Semua', 'text-gray-500': active!=='Semua' }" class="flex flex-col items-center shrink-0">
                            <img src="{{ asset('assets/kategori-semua.svg') }}" alt="All UMKM" class="w-8 h-8 mb-2">
                            <span>Semua</span>
                        </button>
                        <button @click="active='Makanan'; open=false" :class="{ 'text-[#EF4400] font-bold': active==='Makanan', 'text-gray-500': active!=='Makanan' }" class="flex flex-col items-center">
                            <img src="{{ asset('assets/kategori-makanan.svg') }}" alt="Makanan" class="w-8 h-8 mb-2">
                            <span>Makanan</span>
                        </button>
                        <button @click="active='Minuman'; open=false" :class="{ 'text-[#EF4400] font-bold': active==='Minuman', 'text-gray-500': active!=='Minuman' }" class="flex flex-col items-center">
                            <img src="{{ asset('assets/kategori-minuman.svg') }}" alt="Minuman" class="w-8 h-8 mb-2">
                            <span>Minuman</span>
                        </button>
                        <button @click="active='Jasa'; open=false" :class="{ 'text-[#EF4400] font-bold': active==='Jasa', 'text-gray-500': active!=='Jasa' }" class="flex flex-col items-center">
                            <img src="{{ asset('assets/kategori-jasa.svg') }}" alt="Jasa" class="w-8 h-8 mb-2">
                            <span>Jasa</span>
                        </button>
                        <button @click="active='Lainnya'; open=false" :class="{ 'text-[#EF4400] font-bold': active==='Lainnya', 'text-gray-500': active!=='Lainnya' }" class="flex flex-col items-center">
                            <img src="{{ asset('assets/kategori-lainnya.svg') }}" alt="Lainnya" class="w-8 h-8 mb-2">
                            <span>Lainnya</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Alpine.js -->
            <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

            <button
                class="bg-white text-[#EF4400] px-4 py-2 rounded-full shadow-md hover:bg-[#F46100] focus:outline-none focus:ring-2 focus:ring-[#EF4400]">
                <span class="font-bold">Terdekat</span>
            </button>
            {{-- <button
                class="bg-white text-[#EF4400] px-4 py-2 rounded-full shadow-md hover:bg-[#F46100] focus:outline-none focus:ring-2 focus:ring-[#EF4400]">
                <span class="font-bold">Terpopuler</span>
            </button> --}}
        </div>
        <button
            class="bg-[#EF4400] text-white px-4 py-2 rounded-full shadow-md hover:bg-[#F46100] focus:outline-none focus:ring-2 focus:ring-[#F46100] mt-4 sm:mt-0 sm:ml-auto flex items-center">
            <span class="font-bold text-sm">Lihat Semua UMKM</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6" />
            </svg>
        </button>
    </div>


    <div class="max-w-7xl mx-auto mb-12">
        <!-- Title -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            @foreach($umkms as $umkm)
                <div class="bg-white p-2 rounded-lg shadow-lg border-2 border-[#EF4400] flex flex-col">

                    <div class="relative mb-4">
                        <img 
                            src="{{ asset('storage/' . $umkm->primary_photo) }}" 
                            alt="{{ $umkm->name }}" 
                            class="w-full h-40 object-cover rounded-md">

                        <!-- Tag kategori -->
                        <div
                            class="absolute top-4 right-4 bg-orange-100 text-orange-600 text-xs font-semibold px-3 py-1 rounded-full z-10">
                            {{ $umkm->category->name }}
                        </div>
                    </div>

                    <!-- Nama UMKM -->
                    <h3 class="text-xl font-normal text-[#EF4400] font-[Anton]">
                        {{ $umkm->name }}
                    </h3>

                    <!-- Deskripsi Singkat -->
                    <p class="text-gray-500 mb-2">
                        {{ $umkm->short_description}}
                    </p>

                    <!-- Jarak -->
                    {{-- <div class="flex items-center text-gray-400 text-sm mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M12 2c4.505.021 7.956 3.809 8 8.174l-.018.001H20c.04 3.38-2.505 7.261-7.322 11.57-.19.17-.434.255-.678.255-.244 0-.488-.085-.679-.256-4.814-4.308-7.359-8.189-7.319-11.568L4 10.175C4.043 5.81 7.495 2.021 12 2Zm0 10a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"
                                clip-rule="evenodd"></path>
                        </svg>

                        <span>
                            {{ number_format($umkm->distance, 0) }} m
                        </span>
                    </div> --}}

                    <!-- Tombol Detail -->
                    <a href="{{ route('umkm.show', $umkm->id) }}"
                    class="mt-auto bg-[#EF4400] text-white py-2 px-4 rounded-lg w-full text-center">
                        Lihat Detail
                    </a>

                </div>

            @endforeach
        </div>
    </div>

</section>