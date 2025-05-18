<?php

namespace App\Core;

use Flight;
use League\Plates\Engine;

class Helpers {
    public static function view($page, $data=[]) {
        $templates = new Engine(__DIR__.'/../../views');
        echo $templates->render($page, $data);
    }
}