# UMKM Indramayu

Proyek ini adalah aplikasi web yang bertujuan untuk mendukung pengelolaan dan promosi usaha mikro, kecil, dan menengah (UMKM) di Indramayu. Aplikasi ini menyediakan berbagai fitur untuk mempermudah UMKM dalam mengelola produk, transaksi, serta mempromosikan bisnis mereka secara online.

## Tech Stack

- **Frontend**: HTML, Tailwind CSS
- **Backend**: PHP, Laravel
- **Database**: MySQL

## Cara Menjalankan Proyek

### 1. Clone repositori

Clone repositori proyek ini ke dalam komputer Anda:

```bash
git clone <https://github.com/ayipmhdd/umkmyu.git>

Instal dependensi Laravel dengan menjalankan perintah berikut:
composer install

Salin file .env.example menjadi .env dengan perintah berikut:
cp .env.example .env

Generate Application Key
php artisan key:generate

Migrasi Database
php artisan migrate

Migrasi Storage
php artisan storage:link

Jalankan Aplikasi
php artisan serve
