<?php

namespace App\Models;

class Sobre{

    private $connection;

    public function __construct(\PDO $connection){
        $this->connection = $connection;
    }

    public function getInfo(){

        $query = "SELECT valores FROM tb_info";

        return $this->connection->query($query)->fetchAll();
    }
}