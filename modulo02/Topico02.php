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
                            <h2 class="Titulo">02 - O Sistema Estadual de Acesso à Informação</h2>
                            <hr>

                            <p>No âmbito do Estado do Ceará, a regulamentação veio por meio da Lei Estadual n° 15.175/12. A referida norma criou, no Estado do Ceará, o Sistema Estadual de Acesso à Informação composto pelo Conselho Estadual de Acesso à Informação (CEAI) e pelos Comitês Gestores de Acesso à Informação de cada poder (CGAI), estes últimos com competências para apreciar os <strong>recursos da negativa de informações e os procedimentos de classificação e reavaliação de informações de cada poder</strong>. No Poder Executivo Estadual, integram ainda o referido Sistema os Comitês Setoriais de Acesso à Informação.</p>
                            <p>Em suma, o que se busca com a regulamentação nos Estados e Distrito Federal, a exemplo da União e do Estado do Ceará, é a criação de órgãos e de procedimentos necessários para construção de um Sistema Público de Acesso à Informação capaz de viabilizar, no plano concreto, o direito fundamental de acesso à informação.</p>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                    <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 01 - MODAL -->
                            <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 01 - End -->

                            

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
                    <a href="Topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico02.1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
