<?php

class categoriaController extends Controller {

    public function index() {

        $dados = array();

        $this->loadTemplate('categoria', $dados);
    }

}
