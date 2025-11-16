<!DOCTYPE html>
<html lang="en">
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

        /* Hilangkan scrollbar di semua browser */
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
<body id="beranda">
    @include('mainpage.section-page.header')

    @include('mainpage.section-page.hero-section')

    @include('mainpage.section-page.direktori-umkm', ['umkms' => $umkms])

    @include('mainpage.section-page.additional')

    @include('mainpage.section-page.kontak')

    @include('mainpage.section-page.footer')
</body>
</html>