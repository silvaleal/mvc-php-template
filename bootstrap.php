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

define("MAINTENANCE", $_ENV['APP_MAINTENANCE'] == 'true' ? true : false);
define("USER_LANG", $_SESSION["lang"] ?? $_ENV["APP_LOCATE"]);
define("PATH_MAIN", __DIR__);