<?php 

namespace Database;

use Database\Migrations\Users;

class Database {

    public function tables(){
        new Users();
    }

}