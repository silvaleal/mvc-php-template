<?php 

use App\Helpers\Auth;

class hasAuthenticate {
    public function before($params) {
        if (!Auth::check()) {
            Flight::redirect('/login');
            return;
        }
    }
}