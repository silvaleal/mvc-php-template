<?php 

namespace App\Controllers\Authenticate;

use App\Helpers\Auth;
use App\Helpers\Validate;
use App\Helpers\View;
use App\Models\Users;
use Flight;

class UserRegister {
    public Users $usersModel;

    public $rules = [
        'email'=>'string',
        'name'=>'string',
        'password'=>'string',
        'password_confirm'=>'string',
    ];  

    public function __construct(Users $usersModel) {
        $this->usersModel = $usersModel;
    }

    public function page() {
        View::page('register');
    }

    public function action() {
        $validate = Validate::action($_POST, $this->rules);
        
        if($this->usersModel->checkField('email', $validate['email'])) {
            Flight::redirect('/register');
            return;
        };
        
        if($this->usersModel->checkField('name', $validate['name'])) {
            Flight::redirect('/register');
            return;
        };

        $this->usersModel->insert($validate['name'],$validate['email'],$validate['password']);
        $user = $this->usersModel->login($validate['email'], $validate['password']);

        Auth::set($user);
        Flight::redirect('/profile');
    }
}