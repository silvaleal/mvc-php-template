<?php

use App\Controllers\PagesController;

Flight::route('/', [new PagesController(), 'home']);