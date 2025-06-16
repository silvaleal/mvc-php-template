<?php

use Database\Database;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__ . "/vendor/autoload.php";


class Bootstrap
{

    public function __construct()
    {
        $this->loadDotEnv();
        $this->loadDatabase(); 
    }
    
    public function loadDotEnv()
    {
        // 
        $dotenv = Dotenv::createImmutable(PATH_MAIN);
        $dotenv->safeLoad();
    }
    
    public function loadDatabase()
    {
        // https://github.com/illuminate/database
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver' => $_ENV['DB_DRIVER'],
            'host' => $_ENV['DB_HOST'],
            'database' => $_ENV['DB_NAME'],
            'username' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASS'],
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        
        new Database();
    }
}

define("PATH_MAIN", __DIR__);
define("PATH_VIEW", __DIR__."/app/Views");
define("PATH_LANG", __DIR__."/lang");

new Bootstrap();

define("MAINTENANCE", $_ENV['APP_MAINTENANCE'] == 'true' ? true : false);
define("USER_LANG", $_SESSION["lang"] ?? $_ENV["APP_LOCATE"]);