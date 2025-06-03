<?php 

namespace App\Models;

class Users extends \Illuminate\Database\Eloquent\Model {

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

}