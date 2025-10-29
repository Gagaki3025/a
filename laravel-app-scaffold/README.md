# laravel-app (minimal scaffold)

This is a minimal scaffold that mimics the Laravel project layout so you can start working without Composer present.

What I created:
- `app/`, `bootstrap/`, `config/`, `database/`, `public/`, `resources/`, `routes/`, `storage/`, `tests/`
- `composer.json` (minimal)
- `artisan` (stub)
- `public/index.php` (stub)
- `routes/web.php` (example)
- `.gitignore`

Next steps to get a full Laravel project (recommended):

1. Install Composer on your system (example for Debian/Ubuntu):

```bash
sudo apt update
sudo apt install composer
```

2. From the project root run:

```bash
composer create-project laravel/laravel .
```

This will overwrite many files with the official Laravel project. If you want to preserve these stubs, copy them elsewhere first.

Quick local test (without Composer):

```bash
php public/index.php
php routes/web.php
php artisan
```

If you'd like, I can:
- Install Composer (if you allow `sudo` package install) and create a full Laravel project now.
- Or convert this scaffold into a small example app with a real controller/view and a tiny test harness.

Tell me which you prefer.
