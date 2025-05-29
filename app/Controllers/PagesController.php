<?php

namespace App\Controllers;

use App\Helpers\View;
use App\Models\Users;

class PagesController {

    public function home() {

        View::page('home');
    }
}