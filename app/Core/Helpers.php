<?php

namespace App\Core;

use Flight;

class Helpers {
    public static function view($page) {
        return Flight::render(__DIR__."/../../views/$page.php");
    }
}