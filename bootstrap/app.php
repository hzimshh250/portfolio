<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Trust all proxies — required for Railway/cloud reverse proxies
        // so Laravel generates https:// URLs correctly
        $middleware->trustProxies(at: '*');

        // Exempt contact form — token sent via X-CSRF-TOKEN header
        // belt-and-suspenders for Railway ephemeral session edge cases
        $middleware->validateCsrfTokens(except: [
            '/contact',
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
