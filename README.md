# ABSENSI QR LARAVEL 8

## USAGE

1. clone repository

    ```bash
    git clone https://github.com/NaufalHafizh/MultiAuth-Laravel.git
    ```

2. buat database baru
3. Setting .Env dalam project

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=absensi_pegawai // sesuaikan dengan database yang di buat
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. Migrasi

    ```bash
    php artisan migrate:fresh
    ```

5. Seeding

    ```bash
    php artisan db:seed
    ```

6. Development Server

    ```bash
    php artisan serve
    ```
