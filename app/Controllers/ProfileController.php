<?php 

namespace App\Controllers;

use App\Helpers\View;

class ProfileController {
    public function page()
    {
        return View::page("profile");
    }
}