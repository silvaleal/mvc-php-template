<?php

namespace App\Controllers;

use App\Core\Helpers;

class PagesController {
    public function home() {
        Helpers::view('home');
    }
}