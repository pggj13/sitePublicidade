<?php

class administradorController extends Controller {

        public function index() {

                $dados = array();
                $promocao = new promocao();
                $produtos = new produtos();
                $promocao->addPromocao();
                $produtos->addProduto();

                $this->loadTemplate('administrador', $dados);
        }

}
