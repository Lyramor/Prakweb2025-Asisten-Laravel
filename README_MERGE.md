# Quick Start - Merged Laravel Project

## ✅ Merge Selesai!

Project **laravel-m-main** dan **laraveltest-main** telah berhasil digabungkan.

## Yang Digunakan

### Dari `laravel-m-main`:
- ✨ Semua **Views** (home, about, blog, contact)
- ✨ **Layout** dengan Tailwind CSS yang sudah bagus
- ✨ Navigation bar yang menarik

### Dari `laraveltest-main`:
- 🔧 **Controllers**: PostController, CategoryController
- 🔧 **Models**: Post, Category (dengan relasi)
- 🔧 **Migrations**: create_categories_table, create_posts_table
- 🔧 **Algoritma** untuk mengambil data dari database

## Quick Setup

```bash
# 1. Masuk ke folder project
cd laravel-m-main

# 2. Copy environment file
cp .env.example .env

# 3. Generate key
php artisan key:generate

# 4. Setup database di .env
# Edit DB_DATABASE, DB_USERNAME, DB_PASSWORD

# 5. Jalankan migration
php artisan migrate

# 6. Install dependencies (jika diperlukan)
composer install
npm install

# 7. Build assets
npm run dev

# 8. Jalankan server
php artisan serve
```

## Routes yang Tersedia

- `/` - Home
- `/about` - About
- `/blog` - Blog (menampilkan posts dari database)
- `/posts` - Posts (sama dengan blog)
- `/contact` - Contact
- `/categories` - Categories

## Struktur Database

**Table: categories**
- id
- name
- timestamps

**Table: posts**
- id
- user_id (foreign key)
- category_id (foreign key)
- title
- slug
- excerpt
- body
- image (nullable)
- timestamps

## Relasi Model

- Post **belongsTo** User
- Post **belongsTo** Category
- Category **hasMany** Posts
- User **hasMany** Posts

---

📝 Lihat **MERGE_DOCUMENTATION.md** untuk detail lengkap!
