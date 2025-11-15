<section class="relative bg-[#EF4400] text-white rounded-2xl md:p-16 overflow-hidden mx-8">
    <!-- Floating Images -->
    <img src="{{ asset('assets/darlung.png') }}" class="absolute bottom-[5%] left-[35%] w-10 md:w-12 lg:w-12 object-contain z-10" />

    <img src="{{ asset('assets/sop-buah.png') }}"
        class="absolute bottom-[22%] left-[42%] w-18 md:w-16 lg:w-16 object-contain z-10 -rotate-[20deg]" />

    <img src="{{ asset('assets/pukis.png') }}" class="absolute bottom-[5%] left-[49%] w-20 md:w-24 lg:w-24 object-contain z-10" />

    <img src="{{ asset('assets/klepon.png') }}" class="absolute top-[28%] right-[38.5%] w-60 md:w-24 lg:w-24 object-contain z-10" />

    <img src="{{ asset('assets/tukang-sayur.png') }}"
        class="absolute -bottom-[4%] right-[4%] w-60 md:w-60 lg:w-[20%] object-contain z-10" />

    <img src="{{ asset('assets/tukang-ikan.png') }}"
        class="absolute -bottom-[9%] right-[19%] w-60 md:w-60 lg:w-[20%] object-contain z-10" />

    <img src="{{ asset('assets/bg-pattern.png') }}"
        class="absolute bottom-[0%] right-[0%] hidden md:block w-20 lg:w-[57%] object-contain" />

    <!-- Hero Text -->
    <div class="relative z-30 flex flex-col justify-center items-start max-w-4xl mx-[0%] py-0">

        <h1 class="font-montserrat font-bold text-[2rem] md:text-4xl leading-tight">
            Dukung UMKM Lokal
        </h1>

        <p class="mt-3 text-[1.4rem] font-medium leading-tight opacity-90">
            Temukan usaha terbaik di sekitarmu & bantu<br class="hidden md:block">
            ekonomi lokal berkembang
        </p>

        <!-- Tombol -->
        <button
            class="mt-6 bg-white text-[#EF4400] font-semibold px-4 py-2 rounded-xl flex items-center gap-2 shadow-md">
            Lihat semua UMKM
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6l6 6-6 6" />
            </svg>

        </button>
    </div>
</section>