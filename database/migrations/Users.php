<?php 

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class Users {

    public function __construct() {
        if (Capsule::schema()->hasTable("users")) return; 
        
        Capsule::schema()->create("users", function ($table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

}