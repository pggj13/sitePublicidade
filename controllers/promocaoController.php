<?php

class promocaoController extends Controller{
    
    public function index() {
        
        $dados = array();
        
        $promocao = new promocao();
        $dados['promocao'] = $promocao->getPromocao();
        
        $this->loadTemplate('promocao', $dados);
        
    }
}
