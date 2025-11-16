<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMKMYU - Direktori UMKM Indramayu</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body::-webkit-scrollbar {
            display: none;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        anton: ['Anton', 'sans-serif'],
                        montserrat: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        orange: '#EF4400',
                    },
                    backgroundImage: {
                        'gradient-api': 'linear-gradient(to right, #E60F00, #F46100)',
                    },
                },
            },
        };
    </script>
</head>

@include('mainpage.section-page.header')

<!-- Halaman Search -->
<section class="max-w-7xl mx-auto px-6 py-8">

    <!-- Search Header -->
    <div class="mb-8 flex justify-center">
        <form action="{{ route('cari') }}" method="GET" class="flex w-full sm:w-1/2 gap-2">
            <input type="text" name="q" placeholder="Cari UMKM yang ada Indramayu disini"
                value="{{ request('q') }}"
                class="w-full border border-gray-300 rounded-full px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EF4400] focus:border-[#EF4400] transition">
            <button type="submit"
                class="inline-flex items-center justify-center rounded-full bg-[#EF4400] px-3 py-3 text-white shadow-sm hover:bg-[#d73c00] focus:outline-none focus:ring-2 focus:ring-[#EF4400] focus:ring-offset-2">
                <svg width="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="17" y1="17" x2="21" y2="21"></line>
                </svg>
            </button>
        </form>
    </div>

    @if(!request('q'))
        <!-- Paling Banyak Dicari -->
        <div class="mb-8">
            <h2 class="text-[#EF4400] font-bold mb-3 text-lg sm:text-xl">PALING BANYAK DICARI</h2>
            <div class="flex flex-wrap gap-3 justify-center">
                <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
                <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
                <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
                <button class="px-4 py-2 rounded-full border border-gray-300 text-gray-700 hover:bg-[#EF4400] hover:text-white transition">Lorem Ipsum</button>
            </div>
        </div>

        <!-- UMKM Populer -->
        <div>
            <h2 class="text-[#EF4400] font-bold mb-3 text-lg sm:text-xl">UMKM PALING SERING DI LIHAT</h2>
        </div>
    @endif

    <!-- UMKM Hasil Search / Semua -->
    <div>
        @if(request('q'))
            <h2 class="text-[#EF4400] font-bold mb-3 text-lg sm:text-xl">Hasil Pencarian: "{{ request('q') }}"</h2>
        @endif
        @include('mainpage.section-page.direktori-umkm', ['umkms' => $umkms])
    </div>

</section>

@include('mainpage.section-page.footer')
