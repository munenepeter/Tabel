<?php

use Tabel\Core\App;

return App::getInstance(dirname(__DIR__))->configure()
    ->withRouting([
        'web' => __DIR__ . '/../routes/web.php',
    ])
    ->withMiddleware(function () {
        //
    })
    ->withExceptions(function () {
        //
    })->create();
