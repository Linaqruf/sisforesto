## SISFORESTO
Adalah sebuah Aplikasi Sistem Informasi Restoran yang berfungsi untuk mengelola restoran dan cafe.

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
8. Run 
```
php artisan serve
```











