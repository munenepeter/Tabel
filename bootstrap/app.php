<?php

use Tabel\Core\App;

return App::getInstance(dirname(__DIR__))->configure()
    ->withRouting([
        'web' => __DIR__ . '/../routes/web.php',
        'commands' => __DIR__ . '/../routes/console.php',
    ])
    ->withMiddleware(function () {
        //
    })
    ->withExceptions(function () {
        //
    })->create();
