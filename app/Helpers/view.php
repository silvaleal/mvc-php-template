<?php

namespace App\Helpers;

use League\Plates\Engine;

class View 
{
    public static function page($page, $data=[]) {
        $templates = new Engine(__DIR__.'/../Views');
        echo $templates->render($page, $data);
    }
}