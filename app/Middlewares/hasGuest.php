<?php 

namespace App\Middlewares;

use App\Helpers\Auth;
use Flight;

class hasGuest {
    public function before($params) {
        if (Auth::check()) {
            Flight::redirect('/profile');
            return;
        }
    }
}