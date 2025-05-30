<?php 

use App\Controllers\Authenticate\UserLogin;
use App\Controllers\Authenticate\UserRegister;
use App\Controllers\PagesController;
use App\Middlewares\HasGuest;
use App\Models\Users;

$userRegister = new UserRegister(new Users());
$userLogin = new UserLogin(new Users());

Flight::route('GET /register', [$userRegister, 'page'])->addMiddleware([new HasGuest()]);;
Flight::route('POST /register', [$userRegister, 'action'])->addMiddleware([new HasGuest()]);;

Flight::route('GET /login', [$userLogin, 'page'])->addMiddleware([new HasGuest()]);
Flight::route('POST /login', [$userLogin, 'action'])->addMiddleware([new HasGuest()]);;

Flight::route('GET /profile', [new PagesController(), 'home'])
    ->addMiddleware([new hasAuthenticate()]);