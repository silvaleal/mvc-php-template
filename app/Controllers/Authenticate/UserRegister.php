<?php 

namespace App\Controllers\Authenticate;

use App\Helpers\Auth;
use App\Helpers\Validate;
use App\Helpers\View;
use App\Models\Users;
use Flight;

class UserRegister {

    public $rules = [
        'email'=>'email',
        'name'=>'string',
        'password'=>'string',
        'password_confirm'=>'string',
    ];  

    public function page() {
        View::page('register');
    }

    public function action() {
        $validate = Validate::action($_POST, $this->rules);
        
        if (Users::where('email', $validate['email'])->exists()) {
            Flight::redirect('/register');
            $_SESSION["error"] = "Email não disponivel";
            return;
        }
        
        if (Users::where('name', $validate['name'])->exists()) {
            Flight::redirect('/register');
            $_SESSION["error"] = "Nome não disponivel";
            return;
        }

        if ($validate['password'] != $validate['password_confirm']){
            Flight::redirect('/register');
            $_SESSION["error"] = "Senhas diferentes";
            return;
        }
        
        $validate["password"] = password_hash($validate["password"], PASSWORD_DEFAULT);
        $user = Users::create($validate);

        Auth::set( $user->toArray());
        Flight::redirect('/profile');
    }
}
