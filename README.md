# PICNIC Ice Creams - Laravel Dynamic Website

Complete Laravel implementation with Bootstrap admin panel, authentication, and dynamic content management.

## 🚀 Features

- ✅ **Laravel 12** with Blade templates
- ✅ **Laravel Breeze** authentication
- ✅ **Bootstrap 5** Admin Panel with full CRUD
- ✅ **Dynamic Content Management**:
  - Categories & Products
  - Stores
  - Testimonials
  - Videos (YouTube)
  - Instagram Posts
  - Leads from forms
- ✅ **Public Pages**: Home, Flavours, Contact, Media, Store Locator, Franchise, Distributor
- ✅ **Runs via Apache** (no `php artisan serve` needed)

---

## 📁 Installation

### 1. **Apache Virtual Host Setup**

Edit `C:\xampp\apache\conf\extra\httpd-vhosts.conf` and add:

```apache
<VirtualHost *:80>
    ServerName picnic.local
    DocumentRoot "C:/xampp/htdocs/yashpal/picnic/laravel/public"
    
    <Directory "C:/xampp/htdocs/yashpal/picnic/laravel/public">
        AllowOverride All
        Require all granted
        Options Indexes FollowSymLinks
    </Directory>
</VirtualHost>
```

### 2. **Hosts File**

Edit `C:\Windows\System32\drivers\etc\hosts` (as Administrator) and add:

```
127.0.0.1  picnic.local
```

### 3. **Enable Apache mod_rewrite**

In `C:\xampp\apache\conf\httpd.conf`, ensure this line is **uncommented**:

```
LoadModule rewrite_module modules/mod_rewrite.so
```

### 4. **Restart Apache**

Open XAMPP Control Panel → Stop and Start Apache.

### 5. **Database Setup**

Create a MySQL database:

```sql
CREATE DATABASE picnic CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

Update `.env` in `C:\xampp\htdocs\yashpal\picnic\laravel\`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=picnic
DB_USERNAME=root
DB_PASSWORD=
```

### 6. **Run Migrations & Seed Data**

```bash
cd C:\xampp\htdocs\yashpal\picnic\laravel
php artisan migrate
php artisan db:seed --class=AdminUserSeeder
php artisan db:seed --class=ContentSeeder
```

---

## 🔐 Admin Login

- **URL**: `http://picnic.local/login`
- **Email**: `admin@picnic.local`
- **Password**: `password`

After login, access admin panel at: `http://picnic.local/admin/`

---

## 📂 Admin Panel Routes

| Section        | URL                              | Description                      |
|----------------|----------------------------------|----------------------------------|
| Dashboard      | `/admin/`                        | Stats & recent leads             |
| Categories     | `/admin/categories`              | Manage product categories        |
| Products       | `/admin/products`                | Manage products & flavours       |
| Stores         | `/admin/stores`                  | Manage store locations           |
| Testimonials   | `/admin/testimonials`            | Customer reviews                 |
| Videos         | `/admin/videos`                  | YouTube video IDs                |
| Leads          | `/admin/leads`                   | Form submissions                 |

---

## 🌐 Public Pages

| Page           | URL                              |
|----------------|----------------------------------|
| Home           | `http://picnic.local/`           |
| Flavours       | `/flavours/{category?}`          |
| Contact        | `/contact`                       |
| Media          | `/media`                         |
| Store Locator  | `/store-locator`                 |
| Franchise      | `/franchise`                     |
| Distributor    | `/distributor`                   |
| Order Now      | `/order`                         |

---

## 🛠️ Tech Stack

- **Backend**: PHP 8.2, Laravel 12
- **Auth**: Laravel Breeze (Blade)
- **Frontend**: Bootstrap 5, GSAP, Swiper
- **Database**: MySQL
- **Server**: Apache (XAMPP)

---

## 📧 Support

For issues, check:
- Apache error log: `C:\xampp\apache\logs\error.log`
- Laravel log: `storage/logs/laravel.log`

**Built with ❤️ for PICNIC Ice Creams**


<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
