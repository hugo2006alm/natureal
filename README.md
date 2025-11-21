# natureal

This project was developed during the CodeSpring hackathon that took place at ISEP on April 12, 13 and 14, 2024 and was awarded 1st place.

NatuReal is a bird watching webapp with daily challenges, friends, leaderboard, publication feed and more.

## Stack
- PHP 8+, MySQL/MariaDB
- Composer packages: `phpmailer/phpmailer`, `firebase/php-jwt`
- Frontend: Tailwind CSS + DaisyUI, jQuery

## Getting started
1) Install dependencies  
   - PHP extensions for mysqli and OpenSSL enabled.  
   - Run `composer install`.  
   - Run `npm install`.
2) Configure the app  
   - Copy `src/include/config.inc.php` and fill in `servername`, `username`, `password`, `dbname`, and the public URL that serves `/src`.  
   - Update email credentials if you plan to send mail through PHPMailer. Do not commit real credentials.
3) Database  
   - Import `natureal.sql` into your MySQL/MariaDB instance. This seeds the core tables.
4) Build CSS  
   - `npx tailwindcss -i input.css -o src/output.css --watch` (or add `--minify` for a one-off build).
5) Run locally  
   - Point your web server/XAMPP document root at the repository root so `/index.php` can redirect to `/src`.  
   - Alternatively: `php -S localhost:8000 -t src` (adjust `url_site` in the config to match).

## Repository layout
- `src/` – PHP pages, components, and feature handlers (auth, posts, friends, challenges).  
- `public/` – public user-uploaded files (e.g., `users_pfp`).  
- `imgs/` – static assets used by the UI.  
- `natureal.sql` – database schema and seed data.  
- `input.css` / `tailwind.config.js` – Tailwind entrypoint and config.

## Notes
- Secrets currently live in `src/include/config.inc.php` and `src/include/email.inc.php`; keep them out of version control in production.  
- The app assumes sessions are enabled and writable (check PHP session.save_path).  
- File uploads arrive in `src/uploads/` and are referenced directly in the feed and friends views.
