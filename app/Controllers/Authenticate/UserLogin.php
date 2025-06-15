<?php 

namespace App\Controllers\Authenticate;

use App\Helpers\Auth;
use App\Helpers\Validate;
use App\Helpers\View;
use App\Models\Users;
use Flight;

class UserLogin {

    public $rules = [
        'email'=>'email',
        'password'=>'string'
    ];  

    public function page() {
        View::page('login');
    }

    public function action() {
        $validate = Validate::action($_POST, $this->rules);
        
        $user = Users::where("email", $validate)->get();
        
        if($user->isEmpty() || !password_verify($validate["password"], $user[0]->password)) {
            $_SESSION["error"] = "Nenhuma conta foi encontrada com esta credencial";
            Flight::redirect("/login");
            return;
        }
        
        Auth::set( $user[0]->toArray());
        Flight::redirect("/profile");
    }
}
