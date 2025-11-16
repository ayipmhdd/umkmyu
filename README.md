# [UMKM - YU]

Proyek ini adalah aplikasi web yang bertujuan untuk mendukung pengelolaan dan promosi usaha mikro, kecil, dan menengah (UMKM) di Indramayu. Aplikasi ini menyediakan berbagai fitur untuk mempermudah UMKM dalam mengelola produk, transaksi, serta mempromosikan bisnis mereka secara online.

## ⚙️ Detail Teknis (Tech Stack)

Aplikasi ini dibangun menggunakan *framework* dan teknologi berikut (sesuai dengan yang diizinkan oleh panitia) :

| Kategori | Teknologi/Framework yang Digunakan |
| :--- | :--- |
| **Backend** | Laravel |
| **Frontend** | Tailwind CSS|
| **Database** | MySQL |

## 🚀 Instalasi dan Penggunaan

### Prasyarat
* Composer
* Git
* PHP versi 8.2.x

### Langkah Instalasi (Contoh untuk Laravel/PHP)
1.  Kloning repositori:
    ```bash
    git clone https://github.com/ayipmhdd/umkmyu.git
    ```
2.  Masuk ke direktori proyek dan instal dependensi PHP:
    ```bash
    cd umkmyu
    composer install
    ```
3.  Konfigurasi environment:
    ```bash
    cp .env.example .env
    # Sesuaikan konfigurasi database dan kredensial lainnya di file .env
    ```
4.  Jalankan migrasi database dan seed data:
    ```bash
    php artisan migrate --seed
    ```
5.  Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## 📊 Progress Saat Ini

Aplikasi ini sudah mencakup beberapa fitur utama berikut:
- **Landing Page**: Halaman depan aplikasi yang memberikan gambaran umum tentang UMKM yang terdaftar.
- **Halaman Produk**: Menampilkan daftar produk yang dijual oleh UMKM, termasuk detail produk dan harga.