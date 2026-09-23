<?php

/*
|--------------------------------------------------------------------------
| TEMPORARY cPanel cache-clear runner
|--------------------------------------------------------------------------
|
| Upload this file to the Laravel app ROOT (next to `artisan`):
|   /home/USER/bct/run-clear.php
|
| Visit:  https://yoursite.com/bct/run-clear.php?key=YOUR_SECRET
|
| Clears config, route, view, compiled and application caches.
| DELETE THIS FILE after deploying.
|
*/

const SETUP_KEY = '723f4bc756feebaca1625eb5665b91c70acaf0dde3475948a571f298c5c80142';

if (!isset($_GET['key']) || !hash_equals(SETUP_KEY, (string) $_GET['key'])) {
    http_response_code(403);
    exit('403 Forbidden');
}

define('LARAVEL_START', microtime(true));

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

header('Content-Type: text/plain; charset=utf-8');

Illuminate\Support\Facades\Artisan::call('optimize:clear');
echo Illuminate\Support\Facades\Artisan::output();

echo PHP_EOL . 'Done: ' . date('Y-m-d H:i:s') . PHP_EOL;