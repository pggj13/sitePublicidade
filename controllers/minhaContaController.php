<?php

class minhaContaController extends Controller{
     public function index() {
        
        $dados = array();
        
        $this->loadTemplate('minhaConta', $dados);
        
    }
}
