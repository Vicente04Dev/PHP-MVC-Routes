<?php

namespace MF\Model;
use App\Connection;

class Container{

    public static function getModel($model){

        $connection = Connection::getConnection();

        $class = "\\App\\Models\\".ucfirst($model);

        return new $class($connection);
    }
}