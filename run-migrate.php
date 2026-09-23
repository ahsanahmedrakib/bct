<?php

/*
|--------------------------------------------------------------------------
| TEMPORARY cPanel migration runner
|--------------------------------------------------------------------------
|
| Upload this file to the Laravel app ROOT (next to `artisan`):
|   /home/USER/bct/run-migrate.php
|
| Visit:  https://yoursite.com/bct/run-migrate.php?key=YOUR_SECRET
|
| If the database is empty (fresh install, no SQL import) run:
|   https://yoursite.com/bct/run-migrate.php?key=YOUR_SECRET&seed=1
| to create ALL tables AND load the seed data in one step.
|
| For an existing database (e.g. after importing bct_app.sql) just run
| without ?seed=1 - it reports "Nothing to migrate" if everything matches.
|
| DELETE THIS FILE after deploying. Keep it only if you expect future
| migrations. A different secret should be used each time you keep this file.
|
*/

// ─── Security key ─────────────────────────────────────────────────
// Change this before uploading. The URL must contain ?key=<this value>.
const SETUP_KEY = '723f4bc756feebaca1625eb5665b91c70acaf0dde3475948a571f298c5c80142';

if (!isset($_GET['key']) || !hash_equals(SETUP_KEY, (string) $_GET['key'])) {
    http_response_code(403);
    exit('403 Forbidden');
}

// ─── Bootstrap Laravel ───────────────────────────────────────────
define('LARAVEL_START', microtime(true));

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

header('Content-Type: text/plain; charset=utf-8');

// ─── Run migrations (optionally with seeds) ─────────────────────
$command = isset($_GET['seed']) && $_GET['seed'] === '1'
    ? 'migrate --force --seed'
    : 'migrate --force';

Illuminate\Support\Facades\Artisan::call($command);
echo Illuminate\Support\Facades\Artisan::output();

echo PHP_EOL . 'Done: ' . date('Y-m-d H:i:s') . PHP_EOL;