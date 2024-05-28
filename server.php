<?php
//borrowed from laravel

$publicPath = getcwd();

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

if (strpos($uri, '/public') === 0 && file_exists($publicPath . $uri)) {
    return false; // Don't route for public directory files
}

require_once $publicPath . '/public/index.php';
