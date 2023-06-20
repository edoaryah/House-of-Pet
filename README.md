

## Sistem Informasi Antrian Grooming House Of Pet

Sistem informasi antrian grooming bertujuan untuk memberikan layanan pendaftaran janji temu dan manajemen grooming untuk hewan peliharaan.

## Anggota Kelompok

**[Allegra Guruh / 2141762049]**
**[Catur Wulan / 2141762111]**
**[Chamzal Noer H / 2141762078]**
**[Edo Arya H / 2141762068]**
**[Rizky Satria P / 2141762040]**

## Instalasi

1. Buka Terminal
2. 
```bash
Git Clone https://github.com/edoaryah/houseofpet_fix.git
```
3. 
```bash
cd laravel-starter
```
4.
```bash
cp .env.example .env
```

5. Buka .env dan perbarui DB_DATABASE ke database yang dinginkan

6. 
```bash
composer install
```
7.
```bash
php artisan key:generate
```
8.
```bash
php artisan migrate:fresh
```

9. Copy kode ini di .env
```php
MIDTRANS_MERCHANT_ID=G782105753
MIDTRANS_CLIENT_KEY=SB-Mid-client-0SbmlEBXbmJZhvir
MIDTRANS_SERVER_KEY=SB-Mid-server-CQpVm2l2c3mTY4s0zy-ZzGl1
MIDTRANS_IS_PRODUCTION=false
```
10.
```bash
php artisan serve
```