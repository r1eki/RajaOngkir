<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

#Tata Cara petunjuk penggunaan : 

## Update Composer
- composer update

## Setting & Konfigurasi Database
- seting pada .env untuk dbhost , dbuser , dbname , dbpassword 
- php artisan migrate

## Jalankan Server 
- php artisan serve

Buat file rajaongkir.php di folder config secara manual atau jalankan command artisan
```
php artisan vendor:publish
```
jika anda menggunakan command artisan diatas, anda akan dibuatkan file rajaongkir.php di folder config

Tambahkan kode berikut di file .env untuk konfigurasi API rajaongkir
```
RAJAONGKIR_ENDPOINTAPI=isi_base_url_api_akun_anda_disini
RAJAONGKIR_APIKEY=isi_api_key_anda_disini
```
atau anda juga dapat langsung melakukan konfigurasi di file rajaongkir.php di folder config seperti kode berikut.
```php
'end_point_api' => 'isi_base_url_api_akun_anda_disini',
'api_key' => 'isi_api_key_anda_disini',
```

**Penggunaan**

Ambil data provinsi
```php
$data = RajaOngkir::Provinsi()->all();
```

Ambil jumlah provinsi
```php
$data = RajaOngkir::Provinsi()->count();
```

Ambil data provinsi berdasarkan id provinsi
```php
$data = RajaOngkir::Provinsi()->find($id);
```

Ambil data provinsi berdasarkan nama provinsi
```php
$data = RajaOngkir::Provinsi()->search('province', $name = "ja")->get();
```

Ambil data kota
```php
$data = RajaOngkir::Kota()->all();
```

Ambil jumlah kota
```php
$data = RajaOngkir::Kota()->count();
# Sekian semoga bermanfaat.
