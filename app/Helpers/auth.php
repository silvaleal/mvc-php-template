<?php

namespace App\Helpers;

use App\Models\Users;

class Auth {
    public static function check() {
        return isset($_SESSION['auth']);
    }
    public static function get() {
        $session = $_SESSION['auth'];
        $infos = Users::where("id", $session["id"])->first();

        if (!$infos) { // Caso o user esteja conectado em um usuario deletado, ele vai desconectar.
            self::logout();
        }

        return $infos ?? null;
    }

    public static function set(array $user) {
        $_SESSION['auth'] = $user;
        session_write_close();
    }

    public static function logout(){
        unset($_SESSION['auth']);
    }
}
