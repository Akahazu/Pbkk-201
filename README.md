# Portofolio Akademis - Laravel

Aplikasi profil akademis statis menggunakan Laravel routing sandbox, dibangun untuk tugas mata kuliah PBKK.

## Fitur

- **Home** : Sambutan dan ringkasan singkat profil
- **Profil Mahasiswa** (`/dashboard/mahasiswa/{nrp}`) : Detail profil berdasarkan NRP (10 digit, divalidasi regex)
- **Ide Platform Agentic AI** (`/dashboard/agent/{tema?}`) : Penjelasan tema *System Log Anomaly Detection Agent* sebagai proyek utama, dengan beberapa opsi tema lain
- **Kalkulator IPK** (`/dashboard/hitung-ipk/{ip1?}/{ip2?}`) : Menghitung rata-rata IP dua semester secara dinamis
- Named routes, route grouping dengan prefix `/dashboard`, dan fallback route untuk halaman 404 custom

## Tech Stack

- Laravel
- Tailwind CSS v4
- Blade Templates

## Instalasi

```bash
git clone https://github.com/username/pbkk-201.git
cd pbkk-201
composer install
npm install
cp .env.example .env
php artisan key:generate
```

## Menjalankan Project

Buka dua terminal terpisah:

```bash
php artisan serve
```

```bash
npm run dev
```

Lalu buka `http://127.0.0.1:8000` di browser.

## Struktur Rute

| Rute | Deskripsi |
|---|---|
| `/` | Home |
| `/dashboard/mahasiswa/{nrp}` | Detail profil mahasiswa |
| `/dashboard/agent/{tema?}` | Ide platform Agentic AI |
| `/dashboard/hitung-ipk/{ip1?}/{ip2?}` | Kalkulator IPK |
