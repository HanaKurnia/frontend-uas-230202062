
# 📘 Tutorial Laravel CRUD dengan AdminLTE

Aplikasi ini adalah contoh implementasi CRUD sederhana untuk data **Program Studi (Prodi) dan Kelas** menggunakan **Laravel 10** dan **AdminLTE**.

---

### 🐙 Cara Clone Repository GitHub (Backend)
### - Langkah 1: Clone Repo dari GitHub
- Buka terminal (CMD/Git Bash) lalu jalankan:

```bash
git clone https://github.com/kristiandimasadiwicaksono/SI-KRS-Backend.git
```

---

### - Langkah 2: Masuk ke Folder Project

```bash
cd SI-KRS-Backend
```

### - Langkah 3: Install Dependency Laravel

```bash
composer install
```
### ✅ Langkah 4: Copy dan Edit File .env

```bash
cp .env.example .env
```
- Lalu edit isi `.env`:

```env
database.default.hostname = localhost
database.default.database = db_krs
database.default.username = root
database.default.password = 
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```
- Jangan lupa ubah bagian environment
```env
CI_ENVIRONMENT = development
```

### - Langkah 5: Jalankan Migrasi Database
```bash
php spark migrate
```

### - Langkah 6: Jalankan Server 

```bash
php spark serve
```
- Server akan berjalan di browser:
```
http://localhost:8000
```

---

## 📌 API Endpoint

### 📚 **Endpoint Matkul**

* **GET** → `http://localhost:8080/matkul`
* **GET (by Kode)** → `http://localhost:8080/matkul/{kode_matkul}`
* **POST** → `http://localhost:8080/matkul`
* **PUT** → `http://localhost:8080/matkul/{kode_matkul}`
* **DELETE** → `http://localhost:8080/matkul/{kode_matkul}`

### 🎓 **Endpoint Mahasiswa**

* **GET** → `http://localhost:8080/mahasiswa`
* **GET (by NPM)** → `http://localhost:8080/mahasiswa/{npm}`
* **POST** → `http://localhost:8080/mahasiswa`
* **PUT** → `http://localhost:8080/mahasiswa/{npm}`
* **DELETE** → `http://localhost:8080/mahasiswa/{npm}`

## 🧱 Import Database
- Buka link repository
  ```bash
  https://github.com/WindyAnggitaPutri/SI_KRS_Database.git
  ```
- Download file db_krs kemudian import
---

## 🚀 Tutorial Install Laravel di Laragon (Windows)

### - Langkah 1: Install Laragon

1. Pastikan Laragon sudah terinstall, jika belum download Laragon di:
   👉 [https://laragon.org/download/](https://laragon.org/download/)
2. Setelah selesai, buka Laragon dan klik:

   ```
   Start All
   ```
---

### - Langkah 2: Buat Project Laravel

### 🔹 Cara 1: Otomatis (GUI Laragon)

1. Klik kanan pada tray icon Laragon → pilih **Quick app → Laravel**
2. Beri nama project, misal: `frontend`

> 🎉 Laragon otomatis akan menjalankan `composer create-project laravel/laravel` dan membuat folder `frontend`.

3. Setelah selesai, jalankan:

   ```bash
   cd frontend
   php artisan serve
   ```
- Akses di browser:

   ```
   http://localhost:8000

### - Langkah 3: Jalankan Laravel

```bash
cd C:\laragon\www\frontend
php artisan serve
```

---

## 🧠 Bonus: Perintah Penting Laravel

| Perintah                      | Fungsi                           |
| ----------------------------- | -------------------------------- |
| `php artisan serve`           | Menjalankan server lokal Laravel |
| `php artisan migrate`         | Menjalankan migrasi database     |
| `php artisan make:model Nama` | Membuat model                    |
| `php artisan make:controller` | Membuat controller               |


### 4. Setup Database `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=fronted-uas-230202062
DB_USERNAME=root
DB_PASSWORD=
```
---

## 🎨 Install AdminLTE di Laravel

AdminLTE adalah template dashboard Bootstrap yang bisa langsung dipakai di Laravel menggunakan package `jeroennoten/laravel-adminlte`.

### Langkah 1: Install Package
- Buka terminal (CMD/Git Bash)
```bash
composer require jeroennoten/laravel-adminlte
```

### Langkah 2: Jalankan Instalasi AdminLTE

```bash
php artisan adminlte:install
```
- Ini akan:

* Memasang konfigurasi AdminLTE (`config/adminlte.php`)
* Menyediakan layout default
* Menghubungkan dengan tampilan `auth` jika kamu menggunakan Laravel UI

### Langkah 3: Buat Autentikasi

```bash
composer require laravel/ui
php artisan ui bootstrap --auth
npm install
npm run dev
```

## 🔧 Konfigurasi Tambahan 

- Ini untuk mengubah tampilan atau menu sidebar:
- Buka file konfigurasi:

```php
config/adminlte.php
```

### - `config/adminlte.php
- Tambahkan menu sidebar

```php
<?php

return [

   'menu' => [
    // Sidebar search
    [
        'type' => 'sidebar-menu-search',
        'text' => 'search',
    ],

    // Sidebar items
    [
        'text' => 'Matkul',
        'url'  => 'matkul',
        'icon' => 'fas fa-fw fa-university',
    ],
    [
        'text' => 'Mahasiswa',
        'url'  => 'mahasiswa',
        'icon' => 'fas fa-fw fa-chalkboard',
    ],
],

];

```
## 🧠 CRUD Controller

- Buat controller:

```bash
php artisan make:controller DashboardController --resource
```

## 🖼️ Views (Blade)
- Buat view:

```bash
php artisan make:view dashboard 
```

## ✅ Jalankan Aplikasi

```bash
php artisan serve
```

Buka di browser:
[http://localhost:8000/prodi](http://localhost:8000/prodi)


---
