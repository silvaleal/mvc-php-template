<?php 

namespace App\Controllers\Authenticate;

use App\Helpers\Auth;
use App\Helpers\Validate;
use App\Helpers\View;
use App\Models\Users;
use Flight;

class UserLogin {
    public Users $usersModel;

    public $rules = [
        'email'=>'string',
        'password'=>'string'
    ];  

    public function __construct(Users $usersModel) {
        $this->usersModel = $usersModel;
    }

    public function page() {
        View::page('login');
    }

    public function action() {
        $validate = Validate::action($_POST, $this->rules);
        
        $user = $this->usersModel->login($validate['email'], $validate['password']);

        if(!$user) {
            Flight::redirect("/login");
        }
        Auth::set([]);

        Flight::redirect("/profile");
    }
}
