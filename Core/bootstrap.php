<?php

use Tabel\Core\Mantle\App;
use Tabel\Core\Database\Connection;
use Tabel\Core\Database\QueryBuilder;

define('ENV','development');
define('APP_NAME', 'Babel');

//require all files here
require 'helpers.php'; 
require_once __DIR__ . '/../vendor/autoload.php';

//configure config to always point to config.php
App::bind('config', require 'config.php');
/**
 *Bind the Database credentials and connect to the app
 *Bind the requred database file above to 
 *an instance of the connections
 */

session_start();

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['sqlite'])
));
