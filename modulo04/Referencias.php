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
            <div class="main-content container-fluid">
                <div class="row"> <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10"> <!-- Begin col-md-10 -->
                        <div class="page-title">
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2><hr>

                            <p></p>

                            <br><p class="Texto">BRASIL. <strong>Constituição da República Federativa do Brasil de 1988</strong>. Disponível em: <a href="http://www.planalto.gov.br" target="_blank">http://www.planalto.gov.br</a>. Acesso em: 07 nov. 2020.</p>

                            <p class="Texto">__________. Lei nº. 4.320, de 17 de março de 1964. Estatui normas gerais de Direito Financeiro para elaboração e controle dos orçamentos e balanços da União, dos Estados, dos Municípios e do Distrito Federal. Disponível em: <a href="http://www.planalto.gov.br" target="_blank">http://www.planalto.gov.br</a>. Acesso em: 12 nov. 2020..</p>

                            <p class="Texto">__________. Lei nº. 101, de 04 de maio de 2000. Estabelece normas de finanças públicas voltadas para a responsabilidade na gestão fiscal e dá outras providências. Disponível em: <a href="http://www.planalto.gov.br" target="_blank">http://www.planalto.gov.br</a>. Acesso em: 15 nov. 2020.</p>

                            <p class="Texto">__________. Lei nº. 10.527, de 10 de julho de 2001. estabelece diretrizes gerais da política urbana e dá outras providências. Disponível em: <a href="http://www.planalto.gov.br" target="_blank">http://www.planalto.gov.br</a>. Acesso em: 01 nov. 2020.</p>

                            <p class="Texto"> BALEEIRO, Aliomar. <strong>Uma Introdução à ciência das finanças</strong>. 14. Ed. Rio de Janeiro: Forense 1994.</p>

                            <p class="Texto">CARVALHO, Deusvaldo. <strong>Orçamento e Contabilidade Pública</strong>. 5 ed. Rio de Janeiro, Elsevier, 2010.</p>

                            <p class="Texto">SILVA, Valmir Leôncio da. <strong>A nova contabilidade aplicada ao setor público</strong>. 3 ed. Atlas, 2013. </p>

                          
          
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
                </div> <!-- End row-->

                <!-- Botões de navegação -->
                <div class="text-center">
                    <a href="Topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-tasks"></i> Realização Avaliação 01 </a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
