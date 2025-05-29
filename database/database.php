<?php 

namespace Database;

use PDO;

class Database {
    public $connection;

    public function __construct() {
        $pdo = new PDO("mysql:host=localhost;dbname=theads-clone", "root", "");
        $this->connection = $pdo;
    }

}