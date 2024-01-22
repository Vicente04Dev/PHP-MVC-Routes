<?php

namespace App;

class Connection{

    public static function getConnection(){

        try{
            $pdo = new \PDO("mysql:host=localhost;dbname=mvc;charset=utf8",
            "root", "");

            return $pdo;
        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }
}