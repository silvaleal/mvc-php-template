<?php

namespace App\Helpers;

class Auth {
    public static function check() {
        if (isset($_SESSION['auth'])) return true;
    }

    public static function set(array $user) {
        $_SESSION['auth'] = $user;
        session_write_close();
    }

    public static function logout(){
        unset($_SESSION['auth']);
    }
}