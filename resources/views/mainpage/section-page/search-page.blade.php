@include('mainpage.section-page.header')

<!-- Halaman Search -->
<section class="max-w-7xl mx-auto px-6 py-8">

    <!-- Search Header -->
    <div class="mb-8 flex flex-col sm:flex-row items-center gap-2">
        <input type="text" placeholder="Cari UMKM yang ada Indramayu disini"
            class="w-full sm:w-1/2 border border-gray-300 rounded-full px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EF4400] focus:border-[#EF4400] transition">
        <a href="{{ route('search') }}"
           class="inline-flex items-center justify-center rounded-full bg-[#EF4400] px-3 py-3 text-white shadow-sm hover:bg-[#d73c00] focus:outline-none focus:ring-2 focus:ring-[#EF4400] focus:ring-offset-2">
            <svg width="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="17" y1="17" x2="21" y2="21"></line>
            </svg>
        </a>
    </div>

    <!-- Paling Banyak Dicari -->
    <div class="mb-8">
        <h2 class="text-[#EF4400] font-bold mb-3 text-lg sm:text-xl">PALING BANYAK DICARI</h2>
        <div class="flex flex-wrap gap-3">
            <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
            <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
            <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
            <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
            <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
            <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
        </div>
    </div>

    <!-- UMKM Populer -->
    <div>
        <h2 class="text-[#EF4400] font-bold mb-3 text-lg sm:text-xl">UMKM PALING SERING DI LIHAT</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Contoh Item UMKM -->
            <div class="border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-md transition">
                <img src="https://via.placeholder.com/300x200" alt="UMKM Image" class="w-full h-40 object-cover">
                <div class="p-3">
                    <h3 class="font-bold text-sm sm:text-base mb-1">LOREM IPSUM DOLOR</h3>
                    <p class="text-gray-500 text-xs sm:text-sm mb-2">Lorem ipsum dolor sit amet dolor</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span class="bg-[#EF4400] text-white px-2 py-1 rounded-full">Lihat Detail</span>
                        <span>0.9 km</span>
                    </div>
                </div>
            </div>
            <!-- Duplikat item UMKM -->
            <div class="border border-gray-200 rounded-lg overflow-hidden shadow hover:shadow-md transition">
                <img src="https://via.placeholder.com/300x200" alt="UMKM Image" class="w-full h-40 object-cover">
                <div class="p-3">
                    <h3 class="font-bold text-sm sm:text-base mb-1">LOREM IPSUM DOLOR</h3>
                    <p class="text-gray-500 text-xs sm:text-sm mb-2">Lorem ipsum dolor sit amet dolor</p>
                    <div class="flex items-center justify-between text-xs text-gray-500">
                        <span class="bg-[#EF4400] text-white px-2 py-1 rounded-full">Lihat Detail</span>
                        <span>0.9 km</span>
                    </div>
                </div>
            </div>
            <!-- Tambahkan item lainnya sesuai data UMKM -->
        </div>
    </div>
</section>

@include('mainpage.section-page.footer')
