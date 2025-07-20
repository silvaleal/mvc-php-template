<?php 

use App\Controllers\Authenticate\UserLogin;
use App\Controllers\Authenticate\UserRegister;
use App\Controllers\ProfileController;
use App\Helpers\Auth;
use App\Middlewares\hasAuthenticate;
use App\Middlewares\hasGuest;

Flight::route('GET /register', [new UserRegister(), 'page'])->addMiddleware([new hasGuest()]);
Flight::route('POST /register', [new UserRegister(), 'action'])->addMiddleware([new hasGuest()]);

Flight::route('GET /login', [new UserLogin(), 'page'])->addMiddleware([new hasGuest()]);
Flight::route('POST /login', [new UserLogin(), 'action'])->addMiddleware([new hasGuest()]);

Flight::route('GET /profile', [new ProfileController(), 'page'])
    ->addMiddleware([new hasAuthenticate()]);

Flight::route('GET /logout', function () {
    Auth::logout();
    Flight::redirect("/login");
    return;
})->addMiddleware([new hasAuthenticate()]);