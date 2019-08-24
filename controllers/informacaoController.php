<?php

class informacaoController extends Controller{

    public function index() {

        $dados = array();

        $this->loadTemplate('informacao', $dados);
    }

}
