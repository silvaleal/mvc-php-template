<?php

use Dotenv\Dotenv;

require __DIR__."/vendor/autoload.php";

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$maintenance = $_ENV['MAINTENANCE'];

if ($maintenance == 'true') {
    Flight::render(__DIR__.'/views/components/maintenance/maintenance.php');
    die;
}