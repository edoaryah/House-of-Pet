## Sistem Informasi Antrian Grooming House Of Pet

Sistem informasi antrian grooming bertujuan untuk memberikan layanan pendaftaran janji temu dan manajemen grooming untuk hewan peliharaan.

## Anggota Kelompok

**[Allegra Guruh]**
**[Catur Wulan] **
**[Chamzal Noer H] **
**[Edo Arya H] **
**[Rizky Satria P] **

## Instalasi

1. Buka Terminal atau Git Bash
2. Clone Source Code
```bash
Git Clone https://github.com/edoaryah/houseofpet_fix.git
```
3. Ketik perintah
```bash
cd laravel-starter
```
4. Kemudian, ketik perintah
```bash
cp .env.example .env
```

5. Buka .env dan perbarui DB_DATABASE ke database yang dinginkan misal houseofpetDB
```php
DB_DATABASE=houseofpetDB
```

6. Kemudian, ketik perintah
```bash
composer install
```
7. Kemudian, ketik perintah
```bash
php artisan key:generate
```
8. Kemudian, ketik perintah
```bash
php artisan migrate:fresh --seed --seeder=serviceSeed
```

9. Kemudian, ketik perintah dan copy juga jalankan sesuai url yang ditampilkan 
```bash
php artisan serve
```
10. Untuk login sebagai admin menggunakan 
id : admin@gmail.com
pass : admin123

Untuk login sebagai pengguna menggunakan *misal
id : cahyo@gmail.com
pass : 123123123