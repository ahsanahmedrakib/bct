<?php

/*
|--------------------------------------------------------------------------
| TEMPORARY cPanel composer autoload runner
|--------------------------------------------------------------------------
|
| Upload this file to the Laravel app ROOT (next to `artisan`):
|   /home/USER/bct/run-autoload.php
|
| Visit:  https://yoursite.com/bct/run-autoload.php?key=YOUR_SECRET
|
| Only needed if you changed composer.json / composer.lock.
| DELETE THIS FILE after deploying.
|
*/

const SETUP_KEY = '723f4bc756feebaca1625eb5665b91c70acaf0dde3475948a571f298c5c80142';

if (!isset($_GET['key']) || !hash_equals(SETUP_KEY, (string) $_GET['key'])) {
    http_response_code(403);
    exit('403 Forbidden');
}

header('Content-Type: text/plain; charset=utf-8');

// Composer can be run via PHP even without shell terminal access.
// We use passthru-style execution through proc_open with an isolated env.
$composer = __DIR__.'/composer.phar';
if (!file_exists($composer)) {
    $composer = trim((string) shell_exec('which composer 2>/dev/null'));
}

echo 'Composer: ' . ($composer ?: 'none found') . PHP_EOL;

if ($composer) {
    // Fall back to proc_open which respects disable_functions differences.
    $descriptors = [1 => ['pipe', 'w'], 2 => ['pipe', 'w']];
    $cwd = __DIR__;
    $env = array_merge($_ENV, ['COMPOSER_HOME' => sys_get_temp_dir() . '/composer']);
    $command = escapeshellarg(PHP_BINARY) . ' ' . escapeshellarg($composer) . ' dump-autoload -o --working-dir=' . escapeshellarg($cwd);

    $proc = proc_open($command, $descriptors, $pipes, $cwd, $env);
    if (is_resource($proc)) {
        echo stream_get_contents($pipes[1]);
        echo stream_get_contents($pipes[2]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($proc);
    } else {
        echo 'Unable to execute composer. If composer.phar is present, it is used; otherwise install composer.phar next to this file.' . PHP_EOL;
    }
} else {
    echo 'Download composer.phar from https://getcomposer.org/download/ and place it next to this file.' . PHP_EOL;
}

echo PHP_EOL . 'Done: ' . date('Y-m-d H:i:s') . PHP_EOL;