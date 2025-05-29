<?php

use App\Core\Helpers;
use App\Helpers\View;

require __DIR__."/../bootstrap.php";
require __DIR__."/../routes/routes.php";

if ($maintenance == 'true') {
    View::page('components/maintenance/maintenance');
    die;
}

Flight::start();