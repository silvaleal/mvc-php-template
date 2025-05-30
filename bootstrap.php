<?php

use Dotenv\Dotenv;

require __DIR__."/vendor/autoload.php";

session_start();

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$maintenance = $_ENV['MAINTENANCE'];