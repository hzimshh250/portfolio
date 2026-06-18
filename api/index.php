<?php

/**
 * Vercel Entry Point for Laravel
 *
 * Vercel's filesystem is read-only except /tmp.
 * We create the directories Laravel needs and redirect
 * storage writes to /tmp before the app boots.
 */

// Create writable directories Laravel needs in /tmp
$tmpDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/app',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Tell Laravel we are on Vercel
putenv('VERCEL=1');
$_ENV['VERCEL'] = '1';

// Boot Laravel via the public entry point
require __DIR__ . '/../public/index.php';
