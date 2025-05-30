<?php

use App\Controllers\PagesController;

require __DIR__."/groups/users.php";

Flight::route('GET /', [new PagesController(), 'home']);