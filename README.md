# ALPA Template - Landing Page Laravel

Template landing page modern untuk Laravel yang menggunakan teknologi terkini:
- Laravel
- TailwindCSS
- AlpineJS
- Livewire
- Laravel Folio
- Volt

## Fitur

- Desain responsif dan modern
- Performa tinggi
- SEO-friendly
- Komponen yang dapat digunakan kembali
- Animasi halus
- Integrasi kontak form
- Bagian testimonial
- Bagian pricing
- Bagian tim
- Blog
- FAQ

## Persyaratan Sistem

- PHP 8.1 atau lebih baru
- Composer
- Node.js dan NPM

## Instalasi

1. Clone repositori ini:
```bash
git clone https://github.com/username/alpa-template.git
cd alpa-template
```

2. Instal dependensi PHP:
```bash
composer install
```

3. Salin file .env.example menjadi .env:
```bash
cp .env.example .env
```

4. Generate kunci aplikasi:
```bash
php artisan key:generate
```

5. Instal dan kompilasi aset:
```bash
npm install
npm run dev
```

6. Jalankan server pengembangan:
```bash
php artisan serve
```

7. Buka browser dan akses `http://localhost:8000`

## Struktur Template

Template ini mengikuti struktur Laravel standar dengan beberapa tambahan:

- `resources/views/components` - Komponen Blade yang dapat digunakan kembali
- `resources/views/layouts` - Layout utama
- `resources/views/pages` - Halaman-halaman template (menggunakan Laravel Folio)
- `resources/views/livewire` - Komponen Livewire
- `resources/js/alpine` - Komponen AlpineJS
- `resources/css` - File CSS kustom

## Kustomisasi

### Warna

Warna utama dapat dikustomisasi di file `tailwind.config.js`.

### Konten

Konten dapat diubah melalui file-file Blade di direktori `resources/views/pages`.

### Komponen

Komponen dapat dikustomisasi di direktori `resources/views/components`.

## Deployment

Template ini dapat di-deploy ke berbagai platform hosting, termasuk:
- Shared hosting
- VPS
- Laravel Forge
- Laravel Vapor
- Heroku

## Lisensi

[MIT License](LICENSE.md)

## Kredit

Dibuat oleh [Nama Anda]

## Dukungan

Jika Anda memiliki pertanyaan atau membutuhkan bantuan, silakan buka issue di GitHub.
