<?php

namespace App\Controllers;
use MF\Model\Container;
use MF\Controller\Action;

class IndexController extends Action{

    public function index(){
        $produto = Container::getModel("Produto");

        $this->view->dados = $produto->getProdutos();

        $this->render("index", "Layout.phtml");
    }

    public function sobreNos(){
        
        $produto = Container::getModel("Produto");

        $this->view->dados = $produto->getProdutos();

        $this->render("sobreNos", "Layout.phtml");
    }

    public function contacto(){
        echo "<h1>Olá, estou na Contactos</h1>";
    }

    public function servicos(){
        echo "<h1>Olá, estou na Serviços</h1>";
    }
}