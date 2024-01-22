<?php 

namespace App\Models;

class Produto{
    private $connection;

    public function __construct(\PDO $connection){
        $this->connection = $connection;
    }

    public function getProdutos(){
        
        $query = "SELECT * FROM produtos";

        return $this->connection->query($query)->fetchAll();
    }
}