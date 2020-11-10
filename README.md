## SISFORESTO
Adalah sebuah Aplikasi Sistem Informasi Restoran yang berfungsi untuk mengelola restoran dan cafe. Sisforesto dibuat dengan Laravel 8.

### Persiapan
1. Memiliki akun di github untuk cloning repository
2. Text Editor (IDE) seperti
```
Sublime Text
Visual Studio Code
Atom
```
3. Laptop telah terinstall aplikasi berikut ini.
```
PHP
Web Server (apache/nginx)
Database (MySQL/PgSQL)
Composer 
GitBash
```

### Instalasi
1. Download dan Import Database berikut: (https://tinyurl.com/y2g33rod)
2. Buka GitBash
3. Clone Repository
```
$ git clone https://github.com/Linaqruf/sisforesto.git my-project
```
4. Arahkan ke file directory
```
$ cd my-project
```
5. Download seluruh paket aplikasi dengan perintah
```
$ composer install
```
6. Install app's dependencies
```
$ npm install
```
7. Copy file ".env.example", dan ubah menjadi ".env". Kemudian ubah konfigurasi berikut:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel // Nama Database
DB_USERNAME=root // Nama Database
DB_PASSWORD= // Password Database
```

##Langkah Selanjutnya
1. Generate key untuk aplikasi
```
$ php artisan key:generate
```
2. Generate mixing
```
$ npm run dev
```
3. Ulang Generate Mixing
```
$ npm run dev
```

##Penggunaan
1. Run Local Server Laravel
```
$ php artisan serve
```











