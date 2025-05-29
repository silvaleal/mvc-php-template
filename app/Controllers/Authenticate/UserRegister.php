<?php 

namespace App\Controllers\Authenticate;

use App\Helpers\Validate;
use App\Helpers\View;
use App\Models\Users;

class UserRegister {

    public $email;
    public $name;
    public $password;
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
        Validate::action($_POST, $this->rules);
    }
}