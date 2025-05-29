<?php 

namespace App\Models;

use Database\Database;
use PDO;

class Users {
    protected Database $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function insert() {

    }

    public function all() {
        $stmt = $this->database->connection->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete() {
        
    }
}