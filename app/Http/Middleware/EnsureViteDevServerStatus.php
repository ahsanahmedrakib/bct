<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureViteDevServerStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        $hotFile = public_path('hot');

        if (is_file($hotFile) && ! $this->viteServerIsReachable((string) file_get_contents($hotFile))) {
            @unlink($hotFile);
        }

        return $next($request);
    }

    protected function viteServerIsReachable(string $url): bool
    {
        $parts = parse_url($url);

        if (! isset($parts['host']) || isset($parts['path']) && str_ends_with($parts['path'], '/')) {
            return false;
        }

        $host = $parts['host'];
        $port = (int) ($parts['port'] ?? ($parts['scheme'] === 'https' ? 443 : 80));
        $address = ($parts['scheme'] ?? 'http') === 'https' ? 'tls://'.$host : $host;

        $connection = @fsockopen($address, $port, $errno, $errstr, 1);

        if (! $connection) {
            return false;
        }

        fclose($connection);

        return true;
    }
}