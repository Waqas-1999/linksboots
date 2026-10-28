<?php
/**
 * Vercel entry point. Vercel has no Apache/PHP by default, so every request
 * is routed here (see vercel.json) and dispatched to the matching page.
 */
$root = realpath(__DIR__ . '/..');
$path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$path = preg_replace('#(^|/)index\.php$#', '', $path);

if ($path === 'sitemap.xml' || $path === 'sitemap.php') {
    $file = $root . '/sitemap.php';
} else {
    $file = realpath($root . '/' . $path . '/index.php');
}

if (!$file || strpos($file, $root) !== 0 || strpos($file, $root . '/api') === 0 || !is_file($file)) {
    http_response_code(404);
    $file = $root . '/404.php';
}

chdir(dirname($file));
require $file;
