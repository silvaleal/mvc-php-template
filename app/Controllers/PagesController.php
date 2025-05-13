<?php

namespace App\Controllers;

use App\Core\Helpers;
use Flight;

class PagesController {
    public function home() {
        Helpers::view('home');
    }
}