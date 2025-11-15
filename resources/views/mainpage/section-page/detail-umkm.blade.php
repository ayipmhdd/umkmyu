<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail UMKM - {{ $umkm->name }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        anton: ['"Anton"', 'sans-serif'],
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

    <!-- Custom Styles -->
    <style>
        body::-webkit-scrollbar {
            display: none;
        }

        .border-dash-16-8 {
            border: 2px solid transparent;
            border-radius: 0.85rem;
            border-image-slice: 1;
            border-image-source: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"><rect width="100%" height="100%" rx="16" ry="10" style="fill: none; stroke: %23F97316; stroke-width: 3; stroke-dasharray: 16 8;"/></svg>');
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- HEADER -->
    <header class="fixed top-0 left-0 w-full bg-white shadow z-50 flex justify-between items-center px-4 sm:px-8 md:px-12 lg:px-16 py-2">
        <button onclick="history.back()" class="font-montserrat font-semibold text-sm text-black flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="black">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 6l-6 6 6 6" />
            </svg>
            <span>Kembali</span>
        </button>

        <img src="{{ asset('assets/logo.png') }}" alt="logo" class="h-10">

        <button class="font-montserrat font-semibold text-sm text-black flex items-center gap-3">
            <img src="{{ asset('assets/share.png') }}" alt="share-icon" class="h-4">
            <span>Bagikan</span>
        </button>
    </header>

    <!-- MAIN CONTENT -->
    <main class="max-w-5xl mx-auto px-4 py-10 mt-10">

        <!-- INFO SECTION -->
        <section class="flex flex-col md:flex-row gap-6 bg-gradient-api text-white p-6 rounded-2xl shadow-md">

            <!-- Text Info -->
            <article class="flex-1">
                <h2 class="font-anton text-2xl font-normal mb-2">{{ $umkm->name }}</h2>
                <p class="mb-4">{{ $umkm->short_description }}</p>

                <h3 class="text-lg font-semibold mb-1">Tentang UMKM</h3>
                <p class="text-sm leading-relaxed mb-4">{{ $umkm->about }}</p>

                <div class="inline-flex items-center bg-orange-0 rounded-md">
                    <img src="{{ asset('assets/kalender.png') }}" alt="kalender-icon" class="h-7 mr-2">
                    <span>
                        <p class="font-montserrat font-normal leading-none" style="font-size: 0.5rem;">Hari Buka</p>
                        <p class="font-anton font-normal leading-tight">{{ $umkm->open_days ?? '-' }}</p>
                    </span>
                    <img src="{{ asset('assets/jam.png') }}" alt="jam-icon" class="h-7 ml-4 mr-2">
                    <span>
                        <p class="font-montserrat font-normal leading-none" style="font-size: 0.5rem;">Jam Operasional</p>
                        <p class="font-anton font-normal leading-tight">{{ $umkm->open_hours ?? '-' }}</p>
                    </span>
                </div>
            </article>

            <!-- Image Carousel -->
            <aside class="relative w-full max-w-md mx-auto rounded-lg overflow-hidden shadow-lg">
                @php
                    $carouselPhotos = $umkm->photos->pluck('photo')->prepend($umkm->primary_photo);
                @endphp

                @if($carouselPhotos->count() > 0)
                    <img id="carousel-image" src="{{ asset('storage/' . $carouselPhotos[0]) }}" alt="Foto UMKM"
                        class="w-full h-72 object-cover transition-all duration-700 ease-in-out rounded-lg" />
                    <div id="image-indicator" class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-white/80 text-gray-800 px-3 py-1 text-xs rounded">
                        1 / {{ $carouselPhotos->count() }}
                    </div>
                @endif
            </aside>
        </section>

        <!-- MAP SECTION -->
        <section class="bg-white rounded-xl mt-6 p-4 border border-orange shadow-lg">
            <div class="w-full h-64 rounded-lg overflow-hidden border-dash-16-8">
                <iframe
                    src="https://www.google.com/maps?q={{ $umkm->latitude }},{{ $umkm->longitude }}&hl=es;z=14&output=embed"
                    class="w-full h-full border-0 rounded-lg"
                    allowfullscreen
                    loading="lazy">
                </iframe>

            </div>

            <div class="text-center mt-4 mb-4 flex justify-between items-center">
                <span class="inline-block text-left">
                    <h4 class="text-lg font-semibold">{{ $umkm->alamat }}</h4>
                    <p class="text-sm font-normal">Klik tombol untuk membuka di Google Maps</p>
                </span>

                <a href="https://www.google.com/maps/search/?api=1&query={{ $umkm->latitude }},{{ $umkm->longitude }}"
                    target="_blank"
                    class="flex gap-2 items-center bg-orange text-white px-4 py-2 rounded-md text-sm font-medium">
                    <img src="{{ asset('assets/mappin.png') }}" alt="pinmaps-icon" class="h-4">
                    <span class="leading-none">Buka di Google Maps</span>
                    <img src="{{ asset('assets/external-link.png') }}" alt="externallink-icon" class="h-4">
                </a>
            </div>
        </section>
    </main>

    @include('mainpage.section-page.footer')

    <!-- SCRIPT: Carousel -->
    <script>
        const images = @json($carouselPhotos);

        let currentIndex = 0;

        const imgElement = document.getElementById('carousel-image');
        const indicator = document.getElementById('image-indicator');

        function updateCarousel() {
            imgElement.src = "{{ asset('storage') }}/" + images[currentIndex];
            indicator.textContent = `${currentIndex + 1} / ${images.length}`;
        }

        // Tombol navigasi carousel (buat nambah jika mau)
        imgElement.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        });

        // Auto-slide
        setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            updateCarousel();
        }, 4000);
    </script>

</body>

</html>
