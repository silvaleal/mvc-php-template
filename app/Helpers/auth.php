<?php

namespace App\Helpers;

class Auth {
    public static function check() {
        if (isset($_SESSION['auth'])) return true;
    }

    public function set() {
        $_SESSION['auth'] = true;
    }
}