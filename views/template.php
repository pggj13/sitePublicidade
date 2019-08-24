<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./assets/css/template.css">
    </head>
    <body>
        <div class="topo">
            <div class="topoint">
                <p>Olá visitante. Acesse a sua <a href="">conta</a> ou <a href="">Cadastra-se</a></p>
            </div>
        </div>
        <div class="topo2">
            <div class="topo2int">
                <div class="topo2intleft"></div>
                <div class="topo2intright"></div>
            </div>
        </div>
        <div class="menu">
            <div class="menuint">
                <ul>
                    <a href="./"><li>HOME</li></a>
                    <a href="./promocao"><li>PROMOÇÕES</li></a>
                    <a href="./produto"><li>PRODUTOS</li></a>
                    <a href="./categoria"><li>CATEGORIAS</li></a>
                    <a href="./blog"><li>BLOG</li></a>
                    <a href="./minhaConta"><li>MINHA CONTA</li></a>
                    <a href="./informacao"><li>INFORMAÇÕES</li></a>
                    <a href="./contato"><li>CONTATO</li></a>
                     <a href="./administrador"><li>ADMINISTRADOR</li></a>
                </ul>
            </div>
        </div>
        <div class="contanner">
            <div class="contannerint">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            
            </div>
            
        </div>
        <div class="rodape">
            <div class="rodapeint">
                <div class="rodapeintleft">

                    <ul style="float:left;">
                        <li class="link">Informação</li>
                        <a href=""><li>Sobre o BC Arte e Decorações</li></a>
                        <a href=""><li>Entregas</li></a>
                        <a href=""><li>Politicas de Privacidade</li></a>
                        <a href=""><li>Troca e Devoluções</li></a>
                    </ul>
                    <ul style="float: left;margin-right: 10px;">
                        <li class="link">Atendimentos</li>
                        <a href=""><li>Contato-nos</li></a>
                        <a href=""><li>Devoluções</li></a>
                        <a href=""><li>Mapa da Loja</li></a>
                    </ul>
                    <ul style="float: left;margin-right: 10px;">
                        <li class="link">Extras</li>
                        <a href=""><li>Lista de Fabricantes</li></a>
                        <a href=""><li>Blog:Novidades e Dicas</li></a>
                        <a href=""><li>Promoções</li></a>
                    </ul>
                    <ul style="float: left;margin-right: 10px;">
                        <li class="link">Minha Conta</li>
                        <a href=""><li>Minha Conta</li></a>
                        <a href=""><li>Histórico de Pedidos</li></a>
                        <a href=""><li>Lista de Desejos</li></a>
                    </ul>
                    <ul style="float: left;margin-right: 10px;">
                        <li class="link">Fale conosco</li>
                        <a href=""><li>(48) 998-000-521</li></a>
                        <a href=""><li>paulogoncalo@outlook.com</li></a>
                        <a href=""><li>Av.Santa Barbara 1800<br>Osvaldo Roberto Maier</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
