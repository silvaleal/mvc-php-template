<?php

namespace App\Controllers;

use App\Helpers\View;

class PagesController {

    public function home() {
        View::page('home');
    }
}