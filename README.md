# Elevate Beverage Solution

Premium Bar & Beverage Consultancy website built with Laravel 13, Livewire, Blade, and vanilla CSS.

## Tech Stack
- Laravel 13
- PHP 8.5
- Blade templating
- Vanilla CSS (no Tailwind)
- MySQL
- Gmail SMTP for contact form emails

## Features
- Fully responsive homepage with animated sections
- Contact form with DB storage and email notifications
- SEO meta tags + Schema.org structured data
- Sitemap + robots.txt
- GDPR cookie consent (coming soon)
- Admin panel for form submissions (coming soon)

## Local Setup

1. Clone the repo
   git clone https://github.com/CirlaAndrei/elevate-beverage-solution.git

2. Install dependencies
   composer install

3. Copy environment file
   cp .env.example .env
   php artisan key:generate

4. Configure your .env with DB and mail credentials

5. Run migrations
   php artisan migrate

6. Start the server
   php artisan serve

## Team
- Managing Director: Gilbert Mihail
- Marketing Partner: Favour Poal
- Developer: Andrei Cirla
