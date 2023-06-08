<?php

class Database
{    ///
    // Constructs a new instance of the class, initializing a connection to the
    // MySQL database.
    
    // @throws PDOException if the database connection cannot be established
    
    public static $con;
    public function __construct()
    {
        try {
            $string = "mysql:host=localhost;dbname=shop_db;charset=utf8";
            self::$con = new PDO($string, "root", "");

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
     //Retrieves the instance of the class if it exists, otherwise creates it.
     
     // @throws Some_Exception_Class Exception thrown if the instance cannot be created
     // @return self Returns the instance of the class
     
    public static function getInstance()
    {
        if (self::$con) {

            return self::$con;
        }

        $a = new self();
        return self::$con;
    }

}

$db = Database::getInstance();