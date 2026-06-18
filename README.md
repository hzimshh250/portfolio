# ▶ DEV_PORTFOLIO // HAZIM SHAH

> **Terminal / Cyberpunk Brutalist** personal developer portfolio built with Laravel 12, Tailwind CSS 4.0, and Vanilla JavaScript.

[![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=flat-square&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.0-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)

---

## // OVERVIEW

A minimalist, high-impact personal portfolio designed to feel like a developer's command-line environment. Built as a single-page application with a strict **Terminal / Cyberpunk Brutalist** aesthetic — absolute black backgrounds, neon pink accents, monospaced typography, and structural grid overlays.

**Live at:** [hazimshah.dev](https://hazimshah.dev) *(replace with your actual URL)*

---

## // TECH STACK

| Layer | Technology |
|-------|-----------|
| Backend | Laravel 12 (PHP 8.2+) |
| Frontend | Blade Templates |
| Styling | Tailwind CSS 4.0 + Vanilla CSS |
| JavaScript | Vanilla JS (no frameworks) |
| Build Tool | Vite 7 |
| Database | None (static data via Controller) |

---

## // FEATURES

- **Hero Section** — Full-viewport name display with live HH:MM:SS system clock
- **PROJECT_INDEX** — Clickable project cards that open a full modal popup with photo gallery, role, overview, challenges, and optional live link
- **XP_LOGS** — Terminal-style experience timeline for work history
- **EDU_LOG** — Education history in the same terminal format
- **SYS_CAPABILITIES** — Reverse-pyramid skill layout with indexed cards and animated memory bar
- **INIT_CONTACT** — Terminal-style contact form with simulated transmission UX
- Scroll-based fade-in animations (IntersectionObserver)
- Keyboard & swipe navigation for project gallery
- Active nav link tracking on scroll
- Name glitch effect on hero hover

---

## // PROJECT MODAL

Each project card opens a full-screen modal with:
- Extended project description and technical overview
- Your specific role
- Technical challenges solved
- Photo gallery with prev/next navigation, thumbnail strip, and keyboard arrows
- Live site button (when URL is available) or company policy notice

---

## // LOCAL SETUP

```bash
# Clone the repo
git clone https://github.com/hzimshh250/portfolio.git
cd portfolio

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Build assets
npm run build

# Serve locally (via XAMPP or built-in server)
php artisan serve
```

Visit `http://localhost:8000`

---

## // ADDING CONTENT

All portfolio content is managed in one file:

```
app/Http/Controllers/HomeController.php
```

### Add a project screenshot
```
public/images/projects/{project-id}/ss-1.png
```

Then reference it in `HomeController.php`:
```php
'gallery' => [
    asset('images/projects/your-project/ss-1.png'),
    asset('images/projects/your-project/ss-2.png'),
],
```

### Add a live URL
```php
'live' => 'https://your-live-site.com',
```

---

## // DESIGN SYSTEM

| Token | Value |
|-------|-------|
| Background | `#000000` (absolute black) |
| Primary text | `#ffffff` |
| Accent | `#ec4899` (neon pink) |
| Muted text | `zinc-500` |
| Borders | `zinc-800` |
| Font | Space Mono (monospaced) |

---

## // STRUCTURE

```
portfolio/
├── app/Http/Controllers/
│   └── HomeController.php      ← All portfolio data lives here
├── resources/
│   ├── css/app.css             ← Theme tokens, animations, custom styles
│   ├── js/app.js               ← Vanilla JS (clock, modal, gallery, animations)
│   └── views/
│       ├── welcome.blade.php   ← Main single-page layout
│       └── components/
│           ├── project-card.blade.php
│           └── system-tag.blade.php
└── public/
    └── images/projects/        ← Project screenshots go here
```

---

## // AUTHOR

**Muhd Hazim Shah**
BSE (Multimedia) — Universiti Kebangsaan Malaysia

- Email: hazimshah69@gmail.com
- LinkedIn: [linkedin.com/in/muhdhazimshah](https://www.linkedin.com/in/muhdhazimshah/)
- GitHub: [github.com/hzimshh250](https://github.com/hzimshh250)

---

*// STATUS :: AVAILABLE_FOR_WORK*
