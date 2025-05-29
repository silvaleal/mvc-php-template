<?php

use App\Controllers\Authenticate\UserRegister;
use App\Controllers\PagesController;
use App\Models\Users;

$userRegister = new UserRegister(new Users());

Flight::route('GET /', [new PagesController(), 'home']);
Flight::route('GET /register', [$userRegister, 'page']);
Flight::route('POST /register', [$userRegister, 'action']);