<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? 'Full-Stack Developer Portfolio — Laravel, Tailwind CSS, JavaScript' }}">
    <meta name="theme-color" content="#000000">

    <title>{{ $title ?? config('app.name', 'DEV_PORTFOLIO') }} // SYSTEM</title>

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $title ?? 'DEV_PORTFOLIO // SYSTEM' }}">
    <meta property="og:description" content="{{ $description ?? 'Full-Stack Developer Portfolio' }}">
    <meta property="og:type" content="website">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Fallback inline critical CSS */
        html { background: #000; }
    </style>
</head>
<body class="bg-grid min-h-screen antialiased font-mono text-white">

    <!-- CRT Scan Line Effect -->
    <div class="scan-line"></div>

    <!-- Main Content -->
    {{ $slot }}

</body>
</html>
