<?php

use App\Helpers\View;

require __DIR__."/../bootstrap.php";
require __DIR__."/../routes/routes.php";

if ($maintenance == 'true') {
    View::page('components/maintenance/maintenance');
    die;
}

session_start();
Flight::start();