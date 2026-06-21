# HP Service Pro - Company Profile Website

Website company profile profesional untuk bisnis jasa service HP berbasis **Laravel 13** + **TailwindCSS v3** + **Alpine.js**.

## Tech Stack

| Layer | Tech |
|-------|------|
| Backend | Laravel 13 (PHP 8.3+) |
| Database | MySQL |
| CSS | TailwindCSS v3 |
| JS | Alpine.js |
| Build | Vite |
| Auth | Laravel Breeze |

## Fitur

### Public Pages
- **Landing Page** — Hero, Trust Indicator, Services, Why Choose Us, Process Service, Portfolio, Testimonial, CTA, Footer
- **About** — Profil bisnis, visi misi
- **Services** — Daftar layanan database-driven
- **Portfolio** — Gallery dengan filter kategori (LCD, Battery, Software, Hardware)
- **Contact** — Informasi kontak, WhatsApp, form pesan

### Admin Dashboard (`/admin`)
- Dashboard statistik
- CRUD Services
- CRUD Portfolios
- CRUD Testimonials
- Website Settings

### SEO
- Meta title & description
- Open Graph tags
- Sitemap XML (`/sitemap.xml`)
- Friendly URL (slug-based)

## Installation

### Prerequisites
- PHP 8.3+
- Composer 2
- MySQL
- Node.js 18+

### Steps

```bash
# 1. Clone & masuk direktori
cd company_profile_service_hp

# 2. Install PHP dependencies
composer install

# 3. Copy environment
cp .env.example .env

# 4. Generate app key
php artisan key:generate

# 5. Setup database MySQL
# Buat database: company_profile_hp
# Update .env sesuai kredensial MySQL Anda

# 6. Install JS dependencies
npm install

# 7. Build frontend
npm run build

# 8. Migrate & seed
php artisan migrate:fresh --seed

# 9. Create storage link
php artisan storage:link

# 10. Jalankan server
php artisan serve
```

## Admin Account

Setelah `php artisan migrate:fresh --seed`:

- **Email:** admin@hpservice.com
- **Password:** password

## Design System

| Token | Color |
|-------|-------|
| Primary | `#0F172A` |
| Secondary | `#2563EB` |
| Accent | `#06B6D4` |
| Font | Inter / Poppins |

## Route List

```bash
php artisan route:list
```

## Testing

```bash
php artisan test
```

## Project Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── HomeController.php
│   │   │   ├── ServiceController.php
│   │   │   ├── PortfolioController.php
│   │   │   ├── TestimonialController.php
│   │   │   ├── AdminController.php
│   │   │   └── Auth/ (Breeze)
│   │   └── Requests/
│   ├── Models/
│   │   ├── User.php
│   │   ├── Service.php
│   │   ├── Portfolio.php
│   │   ├── Testimonial.php
│   │   └── Setting.php
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── resources/
│   ├── css/app.css
│   ├── js/app.js
│   └── views/
│       ├── layouts/
│       ├── components/
│       ├── pages/
│       └── admin/
```

## Lisensi

MIT
