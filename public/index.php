<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

// Cek apakah vendor/autoload.php ada
if (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
} else {
    // Tampilkan halaman HTML sederhana jika autoload tidak ditemukan
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Laravel Template</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column; background-color: #f7fafc; }
            .container { text-align: center; padding: 2rem; background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 800px; }
            h1 { color: #4a5568; margin-bottom: 1rem; }
            p { color: #718096; line-height: 1.5; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Laravel Landing Page Template</h1>
            <p>Selamat datang di template landing page Laravel yang menggunakan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.</p>
            <p>Template ini masih dalam tahap pengembangan dan sedang diuji di server.</p>
        </div>
    </body>
    </html>';
    exit;
}

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

// Cek apakah bootstrap/app.php ada
if (file_exists(__DIR__.'/../bootstrap/app.php')) {
    $app = require_once __DIR__.'/../bootstrap/app.php';
} else {
    // Jika tidak ada, tampilkan halaman HTML yang sama
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Laravel Template</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column; background-color: #f7fafc; }
            .container { text-align: center; padding: 2rem; background-color: white; border-radius: 0.5rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); max-width: 800px; }
            h1 { color: #4a5568; margin-bottom: 1rem; }
            p { color: #718096; line-height: 1.5; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Laravel Landing Page Template</h1>
            <p>Selamat datang di template landing page Laravel yang menggunakan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.</p>
            <p>Template ini masih dalam tahap pengembangan dan sedang diuji di server.</p>
        </div>
    </body>
    </html>';
    exit;
}

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

// Cek apakah kelas Kernel ada
if (class_exists('Illuminate\Contracts\Http\Kernel')) {
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

    $response = $kernel->handle(
        $request = Illuminate\Http\Request::capture()
    );

    $response->send();

    $kernel->terminate($request, $response);
}
