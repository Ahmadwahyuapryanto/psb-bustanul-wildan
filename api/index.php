<?php

// 1. Definisikan direktori sementara (writable) yang diizinkan oleh Vercel
$tmpDirs = [
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs',
    '/tmp/bootstrap/cache',
];

// 2. Buat direktori tersebut jika belum ada di dalam server Vercel
foreach ($tmpDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// 3. Arahkan semua cache bawaan Laravel ke folder /tmp yang baru saja dibuat
$laravelCachePaths = [
    'APP_SERVICES_CACHE' => '/tmp/bootstrap/cache/services.php',
    'APP_PACKAGES_CACHE' => '/tmp/bootstrap/cache/packages.php',
    'APP_CONFIG_CACHE'   => '/tmp/bootstrap/cache/config.php',
    'APP_ROUTES_CACHE'   => '/tmp/bootstrap/cache/routes.php',
    'APP_EVENTS_CACHE'   => '/tmp/bootstrap/cache/events.php',
    'VIEW_COMPILED_PATH' => '/tmp/storage/framework/views',
];

// Terapkan environment variables ini ke dalam sistem PHP
foreach ($laravelCachePaths as $key => $value) {
    putenv("{$key}={$value}");
    $_ENV[$key] = $value;
    $_SERVER[$key] = $value;
}

// 4. Setelah jalur aman disiapkan, muat aplikasi Laravel seperti biasa
require __DIR__ . '/../public/index.php';