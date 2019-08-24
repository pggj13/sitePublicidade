<?php

class produtoController extends Controller {

        public function index() {

                $dados = array();
                $produtos = new produtos();
                $dados['produtos'] = $produtos->getProdutos();

                $this->loadTemplate('produto', $dados);
        }

}
