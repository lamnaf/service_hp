# PRD (Product Requirement Document)

# Website Company Profile Jasa Service HP

## Laravel + TailwindCSS

---

# 1. Project Overview

## Nama Project

Website Company Profile Jasa Service HP Profesional

## Tujuan Project

Membangun website company profile modern untuk bisnis jasa service handphone yang bertujuan meningkatkan kepercayaan pelanggan, memperkenalkan layanan, menampilkan portofolio pekerjaan, serta mempermudah pelanggan melakukan konsultasi dan booking service.

Website harus memiliki tampilan profesional, cepat, responsive, SEO friendly, dan mencerminkan bisnis service HP terpercaya dengan keunggulan:

* Pengerjaan service selesai dalam 1 hari
* Teknisi profesional
* Transparansi harga
* Garansi service
* Pelayanan cepat

---

# 2. Target User

## Customer

Pengguna yang:

* Mengalami kerusakan HP
* Membutuhkan informasi harga service
* Ingin melihat kredibilitas toko
* Ingin menghubungi teknisi dengan cepat

## Admin / Owner

Pemilik bisnis yang ingin:

* Mengelola konten website
* Mengupdate layanan
* Mengelola galeri pekerjaan
* Mengelola testimonial pelanggan

---

# 3. Tech Stack Requirement

## Backend

Framework:

* Laravel 12

Language:

* PHP 8.3+

Database:

* MySQL

Authentication:

* Laravel Breeze / Laravel UI

---

## Frontend

CSS Framework:

* TailwindCSS

Javascript:

* Alpine.js

Build Tool:

* Vite

---

## Additional Package

Gunakan:

* Laravel Storage untuk upload gambar
* Laravel Validation
* Eloquent ORM
* Blade Component
* Responsive Design System

---

# 4. Design Requirement

## Design Style

Gunakan konsep:

"Modern Professional Mobile Repair Service"

Karakter design:

* Clean
* Premium
* Trustworthy
* Technology oriented

---

# Color Palette

Primary:

Dark Blue
(#0F172A)

Secondary:

Electric Blue
(#2563EB)

Accent:

Cyan
(#06B6D4)

Background:

White / Gray Soft

---

# Typography

Gunakan:

Inter / Poppins

Style:

* Heading bold
* Text mudah dibaca
* Profesional

---

# 5. Website Structure

## Public Pages

---

# 1. Landing Page / Home

URL:

/

Section:

## Hero Section

Isi:

Judul besar:

"Service HP Cepat & Bergaransi, Selesai Dalam 1 Hari"

Subheadline:

"Perbaikan smartphone oleh teknisi berpengalaman dengan sparepart berkualitas."

Button:

* Booking Service
* WhatsApp

Visual:

Gunakan ilustrasi:

* Teknisi service HP
* Smartphone
* Tools repair

---

## Trust Indicator

Tampilkan:

* 5+ Tahun pengalaman
* 1000+ HP diperbaiki
* Garansi service
* Pengerjaan cepat

---

## Layanan Unggulan

Card:

Contoh:

1. Ganti LCD
2. Ganti Battery
3. IC Power
4. Software Repair
5. Kamera
6. Charging Problem

Setiap card:

* Icon
* Nama layanan
* Deskripsi

---

## Why Choose Us

Section:

Alasan memilih:

* Teknisi profesional
* Harga transparan
* Cepat selesai
* Garansi

---

## Process Service

Timeline:

1. Konsultasi
2. Diagnosa kerusakan
3. Persetujuan harga
4. Service
5. Pengambilan HP

---

## Portfolio

Gallery:

Menampilkan:

* Foto sebelum service
* Foto sesudah service
* Aktivitas teknisi

---

## Testimonial

Card customer:

* Nama
* Foto
* Review
* Rating

---

## CTA Section

Banner:

"HP Rusak? Jangan Tunggu Lama"

Button:

Hubungi Teknisi Sekarang

---

## Footer

Isi:

* Logo
* Alamat
* WhatsApp
* Social media
* Copyright

---

# 2. About Page

URL:

/about

Isi:

* Profil bisnis
* Visi misi
* Pengalaman
* Keunggulan

---

# 3. Services Page

URL:

/services

Menampilkan semua layanan:

Database driven.

Field:

* Nama layanan
* Icon
* Deskripsi
* Harga estimasi

---

# 4. Portfolio Page

URL:

/portfolio

Gallery service:

Filter:

* LCD
* Battery
* Software
* Hardware

---

# 5. Contact Page

URL:

/contact

Isi:

* Form kontak
* Nomor WhatsApp
* Maps embed
* Jam operasional

---

# 6. Admin Dashboard

URL:

/admin

Fitur:

## Dashboard

Menampilkan:

* Total layanan
* Total portfolio
* Total testimonial

---

## Manage Services

CRUD:

Create
Read
Update
Delete

Field:

id
title
slug
description
image
created_at

---

## Manage Portfolio

CRUD:

Field:

id
title
category
before_image
after_image
description

---

## Manage Testimonial

CRUD:

Field:

id
customer_name
photo
rating
message

---

## Manage Website Setting

Field:

business_name
logo
address
phone
whatsapp
instagram
facebook

---

# 7. Database Design

## Table users

id
name
email
password
timestamps

---

## Table services

id
title
slug
description
image
timestamps

---

## Table portfolios

id
title
category
before_image
after_image
description
timestamps

---

## Table testimonials

id
customer_name
photo
rating
message
timestamps

---

## Table settings

id
key
value
timestamps

---

# 8. Laravel Architecture Requirement

Gunakan:

Models:

* User
* Service
* Portfolio
* Testimonial
* Setting

Controllers:

* HomeController
* ServiceController
* PortfolioController
* TestimonialController
* AdminController

---

Gunakan:

* Route grouping
* Middleware auth
* Resource controller
* Form Request Validation

---

# 9. SEO Requirement

Implement:

Meta title

Meta description

Open Graph

Friendly URL:

/service/ganti-lcd-iphone

Generate:

sitemap.xml

---

# 10. Performance Requirement

Website harus:

* Mobile first
* Fast loading
* Image optimization
* Lazy loading image

---

# 11. Security Requirement

Implement:

* CSRF Protection
* Validation semua form
* Prevent SQL Injection
* Authentication admin
* Authorization middleware

---

# 12. Development Rules Untuk OpenCode

WAJIB:

1. Buat project Laravel clean architecture

2. Jangan membuat kode duplikat

3. Gunakan Blade Component

4. Gunakan Tailwind utility class

5. Semua fitur harus berjalan tanpa error

6. Setelah membuat fitur:

* lakukan pengecekan route
* cek migration
* cek controller
* cek view

7. Gunakan migration bukan membuat database manual

---

# 13. Folder Structure Expected

resources/views:

components/

layouts/

pages/

admin/

app:

Models/

Http/Controllers/

---

# 14. Deployment Ready

Project harus siap:

* Localhost
* Shared Hosting
* VPS

Include:

.env.example

README.md

Installation:

composer install

npm install

npm run build

php artisan migrate

php artisan storage:link

---

# 15. Final Acceptance Criteria

Website dianggap selesai apabila:

✅ Landing page profesional

✅ Responsive desktop/mobile

✅ Admin dashboard berjalan

✅ CRUD berjalan

✅ Upload gambar berjalan

✅ Database migration berhasil

✅ Tidak ada error Laravel

✅ Tampilan sesuai bisnis service HP profesional

✅ Siap dipresentasikan kepada client

END OF PRD
