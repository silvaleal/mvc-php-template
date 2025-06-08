<?php

namespace App\Helpers;

class Auth {
    public static function check() {
        if (isset($_SESSION['auth'])) return true;
    }
    public static function get() {
        if (isset($_SESSION['auth'])) return $_SESSION['auth'][0];
    }

    public static function set(array $user) {
        $_SESSION['auth'] = $user;
        session_write_close();
    }

    public static function logout(){
        unset($_SESSION['auth']);
    }
}
