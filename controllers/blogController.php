<?php

class blogController extends Controller{
     public function index() {
        
        $dados = array();
        
        $this->loadTemplate('blog', $dados);
        
    }
}
