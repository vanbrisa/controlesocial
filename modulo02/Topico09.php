<?php 
    // HEADER
    include('layout/header.php');
?>
<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <!-- MENU -->
    <?php include('layout/menu.php') ?>

        <div id="main">
            <!-- NAV TOP -->
            <?php include('layout/nav.php') ?>
            <!-- CONTEUDO INICIO -->
            <div class="main-content container-fluid Texto">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">

                            <!-- Título -->
                            <h2 class="Titulo">09 - Transparência Passiva</h2>
                            <hr>

                            <p>A Transparência Passiva, por outro lado, depende de uma solicitação do cidadão, ocorre, portanto, por meio dos pedidos de acesso à informação que normalmente se concentram nos sistemas de informação ao cidadão. Desse modo, o órgão ou entidade solicitado deve se mobilizar no sentido de oferecer uma resposta à demanda.</p>
                            <p>Quando uma informação está em transparência ativa, mas, mesmo assim, é objeto de pedido de acesso, é recomendável que o órgão/entidade oriente o cidadão sobre como acessá-la por meio da internet. Essa prática tem dois objetivos: apresentar ao cidadão uma forma de obter as informações sem a necessidade de abertura de pedidos de acesso; e segundo, tornar mais ágeis os procedimentos para atendimento a pedidos de acesso a informações.</p>
                            <p>Apesar de ser recomendável indicar a transparência ativa nos casos em que couber, é importante frisar que quando houver, nas respostas a pedidos de acesso, indicação de que a informação está em transparência ativa, o órgão/entidade deve orientar, com precisão, onde se encontra essa informação, indicando o caminho a ser seguido, e não apenas o endereço principal do sistema que reúne todas as informações.</p>
                            <p>A repetição de pedidos de acesso sobre os mesmos temas indica que aquela é uma informação de grande interesse para a sociedade em geral, portanto, é interessante que esse tipo de solicitação seja colocado em transparência ativa, até mesmo para reduzir a entrada de pedidos de acesso à informação, tornando mais ágil e efetiva a atuação dos Serviços de Informação ao Cidadão - SIC’s.</p>
                            
                            
                    
                            
                                          
          
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });                    
                            </script>

                        </div> <!-- CLASS PAGE TITLE FIM -->
                    </div> <!-- End col-md-10 -->
                    
                    <div class="col-md-1"></div>
                </div> <!-- End row -->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico08.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico10.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
