<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 py-8 text-center">
    <h2 class="text-3xl sm:text-5xl font-[Anton] font-normal text-[#EF4400] flex items-center justify-center flex-wrap">
        <span>SELAMAT DATANG DI</span>
        <img src="{{ asset('assets/tag-logo.png') }}" alt="Yu" class="h-[1.86em] w-auto object-contain mt-[0.14em] ml-[0.2em]" />
    </h2>

    <p class="text-base sm:text-xl text-gray-800 max-w-3xl mx-auto leading-relaxed">
        Temukan berbagai UMKM lokal terbaik yang siap mendukung ekonomi sekitar Anda. Jelajahi lebih banyak dan bantu mereka berkembang!
    </p>
</section>

<!-- Filter & UMKM Section -->
<section id="menu" class="max-w-7xl mx-auto px-8 py-12 mt-1 pt-1" x-data="{ selectedCategory: 'Semua' }">

    <!-- Filter Buttons -->
    <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4 sm:gap-0">

        <div class="flex flex-wrap sm:flex-nowrap gap-4 sm:space-x-4 items-center w-full sm:w-auto">
            <!-- Dropdown Filter Kategori -->
            <div x-data="{ open: false }" class="relative inline-block w-full sm:w-auto">
                <button @click="open = !open"
                    class="w-full sm:w-auto relative gap-2 flex items-center bg-white px-4 py-2 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-[#EF4400]">
                    <span class="font-bold text-[#EF4400]">Jenis UMKM</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2 transition-transform" :class="{ 'rotate-180': open }" fill="none" viewBox="0 0 24 24" stroke="black">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 9l6 6 6-6" />
                    </svg>
                </button>

                <!-- Dropdown Items -->
                <ul x-show="open" @click.away="open = false" x-transition class="mt-2 bg-white shadow-lg rounded-xl p-4 z-50 w-full sm:w-auto flex flex-nowrap sm:flex-wrap overflow-x-auto justify-start gap-4 sm:gap-8 no-scrollbar">
                    @php
                        $categories = ['Semua', 'Makanan', 'Minuman', 'Jasa', 'Lainnya'];
                    @endphp
                    @foreach($categories as $category)
                        <li>
                            <button @click="selectedCategory='{{ $category }}'; open=false"
                                :class="{ 'text-[#EF4400] font-bold': selectedCategory==='{{ $category }}', 'text-gray-500': selectedCategory!=='{{ $category }}' }"
                                class="flex flex-col items-center shrink-0">
                                <img src="{{ asset('assets/kategori-' . strtolower($category) . '.svg') }}" alt="{{ $category }}" class="w-8 h-8 mb-2">
                                <span>{{ $category }}</span>
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Terdekat Button -->
            {{-- <button @click="selectedCategory='Semua'"
                class="bg-white text-[#EF4400] px-4 py-2 rounded-full shadow-md hover:bg-[#F46100] focus:outline-none focus:ring-2 focus:ring-[#EF4400] font-bold">
                Terdekat
            </button> --}}
        </div>

        <!-- Lihat Semua UMKM -->
        <a href="{{ route('umkm.index') }}" class="bg-[#EF4400] text-white px-4 py-2 rounded-full shadow-md hover:bg-[#F46100] focus:outline-none focus:ring-2 focus:ring-[#F46100] mt-4 sm:mt-0 sm:ml-auto flex items-center">
            <span class="font-bold text-sm">Lihat Semua UMKM</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6l6 6-6 6" />
            </svg>
        </a>

    </div>

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

</section>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>