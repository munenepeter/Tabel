<?php

use Illuminate\Support\Carbon;

if (!function_exists('storage_path')) {
    function storage_path(string $path): string {
        return __DIR__ . '/../storage/' . $path;
    }
}

if (!function_exists('now')) {
    function now(): Carbon {
        return Carbon::now();
    }
}