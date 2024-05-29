<?php

define('APP_ROOT', __DIR__.'/../');


// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__ . '/../bootstrap/app.php');