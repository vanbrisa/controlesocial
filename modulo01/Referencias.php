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
                    
                            <h2 class="Titulo">REFERÊNCIAS</h2>

                            <p></p>

                            <p class="Texto">ALEXANDRINO, Marcelo & PAULO, Vicente. Direito <em><strong>Administrativo Descomplicado</strong></em>. 18. ed. São Paulo: Editora Método, 2010.</p>

                            <p class="Texto">BRASIL. Constituição da República Federativa do Brasil de 1988. Disponível em: <a href="http://www.planalto.gov.br" target="_blank">            http://www.planalto.gov.br </a> . Acesso em: 07 nov. 2020.</p>

                            <p class="Texto">____________. Decreto-lei nº. 200, de 25 de fevereiro de 1967. Dispõe sobre a organização da Administração Federal, estabelece diretrizes para a Reforma Administrativa e dá outras providências. Diário Oficial da República Federativa do Brasil, Brasília, DF, 27 de fevereiro de 1967. Disponível em: <a href="http://www.planalto.gov.br/ccivil_03/decreto-lei/del0200.htm" target="_blank">http://www.planalto.gov.br</a> . Acesso em: 05.11.2020.</p>

                            <p class="Texto">CAMPOS, Anna Maria. <em><strong>Accountability quando poderemos traduzi-la para o português?</strong></em> Disponível em: <a href="https://sistema.bibliotecas-bdigital.fgv.br/" target="_blank">Bibliotecadigital.fgv.br</a>. Acesso em: 01.11.2020. </p>

                            <p class="Texto"> CHIAVENATO, Idalberto. <em><strong>Administração Geral e Pública</strong></em>. 2.ed. Rio de Janeiro: Elsevier,2008.</p>

                            <p class="Texto">MEIRELLES, Hely Lopes. <em><strong>Direito Administrativo Brasileiro</strong></em>. 36.ed. São Paulo: Malheiros Editores, 2010.</p>

                            <p class="Texto">PERUZZOTTI, E.; SMULOVITZ, C. <em><strong>Controlando la Política. Ciudadanos y Medios en las Democracias Latinoamericanas</strong></em>. Buenos Aires: Grupo Editorial Temas, 2002.</p>

                            <p class="Texto">SANTOS, Jair Lima. <strong>O TCU e os controles estatal e social da administração pública</strong>. Revista do TCU, nº 94, out/dez 2002, p. 18. </p>

                          
          
                            <!-- SCRIPT LIGHTBOX -->
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
