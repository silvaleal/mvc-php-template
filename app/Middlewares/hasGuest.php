<?php 

namespace App\Middlewares;

use App\Helpers\Auth;
use Flight;

class HasGuest {
    public function before($params) {
        if (Auth::check()) {
            Flight::redirect('/profile');
            return;
        }
    }
}