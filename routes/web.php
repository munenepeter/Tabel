<?php

use Tabel\Core\Router;
use App\Controllers\PagesController;
use Tabel\Controllers\SystemController;


Router::get('', [PagesController::class, 'index']);


//logs
Router::get('system/logs', [SystemController::class, 'index']);
Router::post('system/logs/delete', [SystemController::class, 'deleteLogs']);
