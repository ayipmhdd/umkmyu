<body>
    <header class="sticky top-0 z-40  bg-white/80 backdrop-blur">
        <nav class="container mx-auto flex items-center justify-between py-4" aria-label="Navigasi utama">
            <!-- Logo & Tombol Burger (Mobile) -->
            <div class="flex items-center gap-3 justify-start">
                <!-- Tombol Burger (Mobile) -->
                <button id="menuBtn"
                    class="md:hidden inline-flex h-10 w-10 items-center justify-center rounded-lg border border-slate-300"
                    aria-expanded="false" aria-controls="mobileMenu" aria-label="Buka menu">
                    <!-- Tombol burger (garis tiga) -->
                    <svg id="burgerIcon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>

                    <!-- Tombol silang (tanda close) - tersembunyi saat menu tertutup -->
                    <svg id="closeIcon" class="hidden" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        aria-hidden="true">
                        <path d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Logo UMKMYU -->
                <a href="#beranda" class="flex items-center gap-3" aria-label="Beranda UMKMYU">
                    <img src="{{ asset('assets/logo.png') }}" alt="Logo UMKMYU" class="h-9 w-auto"/>
                    <img src="{{ asset('assets/tag-logo.png') }}" alt="Logo UMKMYU" class="h-9 w-auto"/>
                </a>
            </div>

            <!-- Menu Desktop -->
            <ul class="hidden items-center gap-6 md:flex">
                <li><a href="#beranda"
                        class="text-[#FF6A00] hover:text-[#FF6A00] font-semibold relative after:content-[''] after:block after:w-0 after:h-1 after:bg-[#FF6A00] after:transition-all after:duration-300 hover:after:w-full">Beranda</a>
                </li>
                <li><a href="#menu"
                        class="text-[#FF6A00] hover:text-[#FF6A00] font-semibold relative after:content-[''] after:block after:w-0 after:h-1 after:bg-[#FF6A00] after:transition-all after:duration-300 hover:after:w-full">Menu</a>
                </li>
                <li><a href="#kontak"
                        class="text-[#FF6A00] hover:text-[#FF6A00] font-semibold relative after:content-[''] after:block after:w-0 after:h-1 after:bg-[#FF6A00] after:transition-all after:duration-300 hover:after:w-full">Kontak
                        Kami</a>
                </li>
            </ul>

            <!-- Tombol Search & Lokasi Saya (Desktop) -->
            <div class="hidden md:flex items-center gap-4">
                <a href="{{ route('search') }}" 
                class="inline-flex items-center justify-center rounded-full bg-[#EF4400] px-2 py-2 text-white shadow-sm hover:bg-[#d73c00] focus:outline-none focus:ring-2 focus:ring-[#EF4400] focus:ring-offset-2">
                    <svg width="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="17" y1="17" x2="21" y2="21"></line>
                    </svg>
                </a>


                <!-- Tombol Lokasi Saya -->
                <div class="relative">
                    <button id="locationButton"
                        class="inline-flex items-center rounded-xl bg-[#EF4400] px-4 py-2 text-white shadow-sm hover:bg-[#d73c00] focus:outline-none focus:ring-2 focus:ring-[#EF4400] focus:ring-offset-2">
                        Lokasi Saya
                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="dropdownMenu"
                        class="dropdown-content absolute hidden bg-white shadow-lg rounded-md mt-2 w-32">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 2</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 3</a>
                    </div>
                </div>

        </nav>

        <!-- Panel Menu Mobile -->
        <div id="mobileMenu" class="hidden border-t border-slate-200 bg-white md:hidden">
            <div class="container mx-auto px-6 py-4">
                <ul class="grid gap-2" aria-label="Menu mobile">
                    <li><a href="#beranda" class="block rounded-lg px-3 py-2 hover:bg-slate-50">Beranda</a></li>
                    <li><a href="#menu" class="block rounded-lg px-3 py-2 hover:bg-slate-50">Menu</a></li>
                    <li><a href="#kontak" class="block rounded-lg px-3 py-2 hover:bg-slate-50">Kontak Kami</a></li>
                    <li>
                        <button id="locationButtonMobile"
                            class="block rounded-lg px-3 py-2 bg-[#EF4400] text-center font-medium text-white">
                            Lokasi Saya
                            <svg class="ml-2 w-4 h-4 inline" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="dropdownMenuMobile"
                            class="dropdown-content hidden bg-white shadow-lg rounded-md mt-2 w-full">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 2</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Option 3</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Tombol Search (Mobile, di luar menu) -->
        <div
            class="md:hidden inline-flex items-center justify-center rounded-full bg-[#EF4400] px-4 py-2 text-white shadow-sm hover:bg-[#d73c00] focus:outline-none focus:ring-2 focus:ring-[#EF4400] focus:ring-offset-2 absolute right-4 top-4 z-10">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="16" y1="16" x2="20" y2="20"></line>
            </svg>
        </div>

    </header>

    <script>
        // Mendapatkan elemen tombol burger dan ikon
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const burgerIcon = document.getElementById('burgerIcon');
        const closeIcon = document.getElementById('closeIcon');

        // Menambahkan event listener untuk toggle menu mobile dan ikon
        menuBtn?.addEventListener('click', () => {
            // Toggle menu visibility
            mobileMenu.classList.toggle('hidden');

            // Toggle ikon burger dan close
            burgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            // Update aria-expanded untuk aksesibilitas
            const isMenuOpen = mobileMenu.classList.contains('hidden');
            menuBtn.setAttribute('aria-expanded', !isMenuOpen);
        });


        // Mendapatkan elemen tombol dan dropdown menu berdasarkan ID
        const locationButton = document.getElementById('locationButton');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Menambahkan event listener untuk membuka/menutup dropdown saat tombol ditekan
        locationButton?.addEventListener('click', () => {
            // Toggle visibility dari dropdown menu
            dropdownMenu.classList.toggle('hidden');
        });

        // Mendapatkan tombol "Lokasi Saya" dan dropdown menu mobile
        const locationButtonMobile = document.getElementById('locationButtonMobile');
        const dropdownMenuMobile = document.getElementById('dropdownMenuMobile');

        // Menambahkan event listener untuk membuka/menutup dropdown saat tombol ditekan di mobile
        locationButtonMobile?.addEventListener('click', () => {
            // Toggle visibility dari dropdown menu mobile
            dropdownMenuMobile.classList.toggle('hidden');
        });

        // Mendapatkan semua elemen navbar
        const navLinks = document.querySelectorAll('ul li a');

        // Menambahkan event listener untuk setiap link
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                // Menghapus kelas 'active' dari semua navbar (jika ada)
                navLinks.forEach(link => link.classList.remove('after:w-full'));
            });
        });

    </script>
</body>