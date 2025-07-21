<?php

namespace App\Helpers;

use App\Models\Users;

class Auth {
    public static function check() {
        if (!isset($_SESSION['auth']) || !Users::find($_SESSION['auth']["id"])) return false;

        return true;
    }
    public static function get() {
        // Para ser possível atualizar diretamente do banco de dados.
        $infos = Users::find($_SESSION['auth']["id"]);
        
        if ($infos) return $infos;
    }

    public static function set(array $user) {
        $_SESSION['auth'] = $user;
        session_write_close();
    }

    public static function logout(){
        unset($_SESSION['auth']);
    }
}
