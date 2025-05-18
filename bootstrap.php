<?php

use App\Core\Helpers;
use Dotenv\Dotenv;

require __DIR__."/vendor/autoload.php";

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$maintenance = $_ENV['MAINTENANCE'];

if ($maintenance == 'true') {
    Helpers::view('components/maintenance/maintenance');
    die;
}