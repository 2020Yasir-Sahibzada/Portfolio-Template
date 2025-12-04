# Portfolio Template (Laravel + Livewire)

A lightweight personal portfolio template built with Laravel, Livewire, Tailwind CSS, and Vite. This project provides a starting point for showcasing projects, skills, and a contact form powered by Livewire.

**Key features**
- **Laravel 10+**: Application foundation and routing.
- **Livewire components**: Interactive contact form at `app/Http/Livewire/ContactForm.php`.
- **Eloquent models & migrations**: `User`, `Contact` and supporting migrations in `database/migrations`.
- **Tailwind CSS + Vite**: Modern utility-first styling and fast asset builds (`resources/css/app.css`, `resources/js/app.js`).
- **Ready-to-use pages**: A simple `welcome` view at `resources/views/welcome.blade.php` that can be adapted as a portfolio homepage.

## Repository structure (high level)
- `app/Http/Livewire/` – Livewire components (e.g. `ContactForm.php`).
- `app/Models/` – Eloquent models (`User.php`, `Contact.php`).
- `resources/views/` – Blade views and layouts.
- `database/migrations/` – Migration files for schema setup.
- `resources/js/`, `resources/css/` – Frontend assets (Vite entry points).

## Requirements
- PHP 8.1+
- Composer
- Node.js 18+ and npm/yarn
- A database supported by Laravel (MySQL, SQLite, Postgres, etc.)

## Quick start (development)
1. Clone the repo and install PHP dependencies:

```powershell
composer install
```

2. Install frontend dependencies and build assets (development watch):

```powershell
npm install
npm run dev
```

3. Copy the example environment file and set values:

```powershell
copy .env.example .env
```

Edit `.env` to configure your `DB_` settings and `APP_URL`.

4. Generate the application key and run migrations:

```powershell
php artisan key:generate; php artisan migrate
```

5. Serve the application:

```powershell
php artisan serve
```

Open the app at the URL shown by the server (default `http://127.0.0.1:8000`).

## Contact form
The contact form is implemented as a Livewire component at `app/Http/Livewire/ContactForm.php` and backed by the `Contact` model at `app/Models/Contact.php`. By default submissions are stored in the database (`contacts` table). You can customize behavior (send email, save additional fields) inside the component.

## Tests
The project includes basic PHPUnit configuration. Run tests with:

```powershell
vendor\\bin\\phpunit
```

## Common commands
- Install PHP deps: `composer install`
- Install JS deps: `npm install`
- Build assets: `npm run build`
- Dev assets: `npm run dev`
- Migrate DB: `php artisan migrate`
- Run tests: `vendor\\bin\\phpunit`

## Deployment notes
- Ensure `APP_ENV=production` and `APP_DEBUG=false` in `.env`.
- Run `php artisan migrate --force` on deploy to apply migrations.
- Build production assets with `npm run build`.
