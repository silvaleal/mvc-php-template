<?php

use Database\Database;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__ . "/vendor/autoload.php";

// 
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// https://github.com/illuminate/database
$capsule = new Capsule;
$capsule->addConnection([
    'driver' => $_ENV['DB_DRIVER'],
    'host' => $_ENV['DB_HOST'],
    'database' => $_ENV['DB_NAME'],
    'username' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASS'],
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$database = new Database();

$maintenance = $_ENV['APP_MAINTENANCE'];