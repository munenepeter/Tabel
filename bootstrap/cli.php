<?php

use Tabel\Core\App;



// Bootstrap the application
$app = App::getInstance(APP_ROOT)->configure()
    ->withRouting([
        'console' => __DIR__ . '/../routes/console.php',
    ]);

if (php_sapi_name() === 'cli') {
    return $app->create();
}
