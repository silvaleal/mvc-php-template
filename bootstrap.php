<?php

use App\Core\Helpers;
use Dotenv\Dotenv;

require __DIR__."/vendor/autoload.php";

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$maintenance = $_ENV['MAINTENANCE'];