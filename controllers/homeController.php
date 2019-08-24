<?php

class homeController extends Controller{
    
    public function index() {
        
        $dados = array();
        $produtos = new produtos();
        $dados['produtos'] = $produtos->getProdutos(6);
        
        $this->loadTemplate('home', $dados);
        
    }
}
