<?php

namespace App\Controllers;

class IndexController{

    public function index(){
        echo "<h1>Olá, estou na Home</h1>";
    }

    public function sobreNos(){
        echo "<h1>Olá, estou na Sobre Nós</h1>";
    }

    public function contacto(){
        echo "<h1>Olá, estou na Contactos</h1>";
    }

    public function servicos(){
        echo "<h1>Olá, estou na Serviços</h1>";
    }
}