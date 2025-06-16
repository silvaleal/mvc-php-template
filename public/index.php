<?php

use App\Helpers\View;

require __DIR__."/../bootstrap.php";
require __DIR__."/../routes/routes.php";

if (MAINTENANCE) {
    View::page('components/maintenance/maintenance', hasWords:false);
    die;
}

session_start();
Flight::start();