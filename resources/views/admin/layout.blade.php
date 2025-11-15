<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') – Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-white h-screen shadow-lg fixed left-0 top-0">
        <div class="p-6 border-b">
            <h2 class="text-xl font-bold text-[#EF4400]">Admin Panel</h2>
        </div>

        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.umkm.index') }}" class="block px-4 py-2 rounded hover:bg-gray-100 {{ request()->routeIs('admin.umkm.index') ? 'bg-gray-200 font-semibold' : '' }}">
                📄 Daftar UMKM
            </a>

            <a href="{{ route('admin.umkm.create') }}" class="block px-4 py-2 rounded hover:bg-gray-100 {{ request()->routeIs('admin.umkm.create') ? 'bg-gray-200 font-semibold' : '' }}">
                ➕ Tambah UMKM
            </a>

            <a href="#" class="block px-4 py-2 rounded hover:bg-gray-100">
                ⚙️ Pengaturan
            </a>
        </nav>
    </aside>

    {{-- MAIN CONTENT --}}
    <main class="flex-1 ml-64 p-10">

        {{-- NAVBAR SIMPLE --}}
        <header class="bg-white shadow mb-8 p-4 rounded-lg flex justify-between">
            <div class="font-semibold text-gray-700">
                @yield('title')
            </div>

            <div>
                <span class="text-gray-600 mr-4">Admin</span>
                <button class="bg-red-500 text-white px-3 py-1 rounded">Logout</button>
            </div>
        </header>

        {{-- PAGE CONTENT --}}
        @yield('content')

    </main>

</body>

</html>
