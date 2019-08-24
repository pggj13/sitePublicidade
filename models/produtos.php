<?php

class produtos extends Model {

        public function getProdutos($n = '') {

                $array = array();
                $sql = "SELECT *FROM produtos ";

                if (!empty($n)) {

                        $sql .= "LIMIT " . $n;
                }
                $sql = $this->db->query($sql);

                if ($sql->rowCount() > 0) {

                        $array = $sql->fetchAll();
                }
                return $array;
        }

        public function addProduto() {

                if (isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {
                        if (isset($_POST['adicionar']) && $_POST['adicionar'] == 0) {

                                $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
                                if (in_array($_FILES['arquivo']['type'], $permitidos)) {

                                        $nome = md5(time() . rand(0, 999)) . '.jpg';
                                        move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/imagem/produtos/' . $nome);
                                        print_r($_FILES);

                                        $titulo = '';
                                        if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                                                $titulo = addslashes($_POST['titulo']);
                                        }

                                        $sql = "INSERT INTO produtos SET arquivos = '$nome'";
                                        $this->db->query($sql);
                                }
                        }
                }
        }

}
