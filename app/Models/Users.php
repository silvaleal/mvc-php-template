<?php 

namespace App\Models;

use Database\Database;
use PDO;

class Users {
    protected Database $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function insert($name, $email, $password) {
        $stmt = $this->database->connection->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        $stmt->execute([
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
        ]);
    }

    public function all() {
        $stmt = $this->database->connection->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function login($email, $password) {
        $stmt = $this->database->connection->prepare("SELECT * FROM users WHERE email = :email AND `password` = :password");
        $stmt->execute([
            "email"=>$email,
            "password"=>$password
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function checkField($field, $value){
        $stmt = $this->database->connection->prepare("SELECT * FROM users WHERE $field = :value");
        $stmt->execute([
            "value"=>$value
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function delete() {
        
    }
}