<section id="kontak" class="max-w-7xl mx-auto my-16 mx-8">
    <!-- Bagian "INGIN BERGABUNG DI UMKM?" di luar box Kontak Kami -->
    <div class="text-center mb-8">
        <h3
            class="text-3xl sm:text-5xl font-[Anton] font-normal text-[#EF4400] flex items-center justify-center flex-wrap">
            <span>INGIN BERGABUNG DI</span>
            <img src="{{ asset('assets/tag-logo.png') }}" alt="Yu" class="h-[1.86em] w-auto object-contain mt-[0.14em] ml-[0.2em]"/>
            <span>?</span>
        </h3>
        <p class="text-base sm:text-xl text-gray-800">
            Daftarkan UMKM-mu untuk mendapat eksposur dan pelanggan baru.
        </p>
    </div>

    <!-- Kontak Kami Section (Form Kontak) -->
    <div class="flex flex-col lg:flex-row items-center justify-between bg-white border-2 border-[#EF4400] rounded-xl p-16">
        <!-- Left Section (Deskripsi Kontak) -->
        <div class="lg:w-2/5">
            <h2 class="text-4xl font-extrabold text-[#EF4400] mb-4">Kontak Kami</h2>
            <p class="text-lg text-gray-700 mb-6">
                Punya pertanyaan atau ingin mendaftar sebagai UMKM? Isi form di bawah. Kami siap bantu
                promosikan UMKMyu-mu 💡
            </p>
            <p class="text-sm text-gray-700">
                Atau email: <a href="mailto:hello@umkmyu.id" class="text-[#EF4400]">hello@umkmyu.id</a>
            </p>
        </div>

        <!-- Right Section (Form) -->
        <div class="lg:w-3/5">
            <form action="#" method="POST" class="grid grid-cols-1 gap-4">
                <div class="flex flex-col">
                    <input type="text" id="name" name="name" placeholder="Nama" class="p-2 border-2 border-[#EF4400] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#EF4400] text-gray-700" required>
                </div>
                <div class="flex flex-col">
                    <input type="email" id="email" name="email" placeholder="Email" class="p-2 border-2 border-[#EF4400] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#EF4400] text-gray-700" required>
                </div>
                <div class="flex flex-col">
                    <textarea id="message" name="message" placeholder="Pesan" class="p-2 border-2 border-[#EF4400] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#EF4400] text-gray-700" rows="4" required></textarea>
                </div>
                <div class="flex gap-4 items-center">
                    <button type="reset" class="px-4 py-1 bg-gray-100 text-[#EF4400] border-2 border-[#EF4400] rounded-lg hover:bg-[#F46100]">Cancel</button>
                    <button type="submit" class="px-4 py-1 bg-[#EF4400] text-white border-2 border-[#EF4400] rounded-lg hover:bg-[#F46100] focus:outline-none focus:ring-2 focus:ring-[#F46100]">Submit</button>
                </div>
            </form>
        </div>
    </div>

</section>