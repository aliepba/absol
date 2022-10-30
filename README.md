## Server Requirements
1. PHP 8.x
1. Composer 2
1. PostgreSQL (recommended) or MariaDB

## Local Setup
1. Clone repository
1. Jalankan `composer install`
1. Salin .env.example ke .env
1. Sesuaikan konfigurasi database dan lain-lain
1. Jalankan 'php artisan key:generate'
1. Jalankan 'php artisan migrate:fresh --seed'
1. Jalankan 'php artisan storage:link'
1. Jalankan 'php artisan vendor:publish --tag=laravolt-assets'
1. Pastikan folder-folder berikut _writeable_:
    1. bootstrap/cache
    1. storage
1. Jalankan 'php artisan serve'
1. Untuk login silahkan menggunakan email admin@admin.com dengan password admin

## Keterangan Tambahan
1. Untuk timeline pengerjaan bisa dilihat di link ini ya 
https://sharing.clickup.com/42621687/tl/h/18mpqq-62/5e0a0c8ccc010fc
1. Jika ada yang ingin request fitur tambahan silahkan dapat membuat issue ya
