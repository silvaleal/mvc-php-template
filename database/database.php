<?php 

namespace Database;

use Database\Migrations\Users;

class Database {

    public function __construct(){
        new Users();
    }

}