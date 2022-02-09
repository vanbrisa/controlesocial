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
                            <h2 class="Titulo">02 - Sistema de Ouvidoria do Poder Executivo Federal</h2>
                            <hr>

                            <!-- Sub Título -->
                            <p class="SubTitulo">02.1 - Ouvidoria Geral da República</p>
                            <hr>

                            <p>Em 1995 foi criada a Ouvidoria-Geral da República, como parte da estrutura do Ministério da Justiça. Ao passo que em 2003, a Ouvidoria-Geral da República foi transferida para a estrutura da Controladoria-Geral da União (CGU), e posteriormente teve seu nome alterado para Ouvidoria-Geral da União (OGU), com competência para exercer a coordenação técnica do segmento de ouvidorias do Poder Executivo federal.</p>
                            <p>O Sistema de Ouvidoria do Poder Executivo federal (SisOuv) tem a finalidade de coordenar as atividades de ouvidoria desenvolvidas pelos órgãos e entidades da Administração Pública Federal. O sistema é composto pelo órgão central e pelas unidades setoriais. A Controladoria Geral da União (CGU), por meio da OGU, atua como órgão central, e atuam como órgãos setoriais as ouvidorias e unidades responsáveis pelas atividades de ouvidoria da Administração Pública Federal Direta e Indireta Autárquica e Fundacional, além das Empresas Estatais que prestem serviços públicos ou que recebam recursos do Tesouro Nacional para o custeio total ou parcial de despesas de pessoal. (Decreto n. 9.492, de 5 de setembro de 2018).</p>
                            <p>As ouvidorias públicas buscam integrar esforços de várias formas, tanto por meio de mecanismos pontuais, em execução de projetos conjuntos, até redes mais ou menos estruturadas, que em comum apresentam uma característica de permanência e coordenação de esforços. Uma atuação conjunta incrementa os esforços pela transparência e facilita o trabalho das áreas de controle.</p>
                

               

      
                                            
                            

                            

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
                    <a href="Topico02.2.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
