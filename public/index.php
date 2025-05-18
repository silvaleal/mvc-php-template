<?php

use App\Core\Helpers;

require __DIR__."/../bootstrap.php";
require __DIR__."/../routes/routes.php";

if ($maintenance == 'true') {
    Helpers::view('components/maintenance/maintenance');
    die;
}

Flight::start();