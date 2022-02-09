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
                <h2 class="Titulo">03 - Controle Social</h2>
                <hr>

                <!-- Sub Título -->
                <p class="SubTitulo">03.1 - Democracia Participativa</p>
                <hr>


                <p>O artigo primeiro da Constituição Federal determina: <em>“Todo poder emana do povo, que o exerce diretamente ou por meio de representantes eleitos”</em>. A redação desse artigo define nosso regime político: a <strong>democracia participativa</strong>.
                    
                <p>Além do processo eleitoral, é possível atuar diretamente na vida política do país por meio de plebiscito, referendo e iniciativa popular na elaboração de leis.Plebiscito e referendo são consultas formuladas ao povo para que delibere sobre matéria de acentuada <strong>relevância</strong>, de natureza <strong>constitucional, legislativa ou administrativa</strong>. O plebiscito é uma consulta sobre matéria de interesse público para que os cidadãos decidam antes da elaboração da lei que tratará sobre o assunto. No referendo, os cidadãos decidirão sobre a matéria <strong>após a aprovação</strong> do projeto de lei ser realizada pelo Congresso Nacional.</p>

                <!-- HR LATERAL AZUL -->
                <div class="bd-callout bd-callout-primary">
                    <p class="Texto">
                        <strong> Plebiscito: </strong>  É convocado com anterioridade a ato legislativo ou administrativo, cabendo ao povo, pelo voto, aprovar ou denegar o que lhe tenha sido submetido. <br> <br>
                        <strong> Referendo: </strong> É convocado com posterioridade a ato legislativo ou administrativo, cumprindo ao povo a respectiva ratificação ou rejeição.</p>
                    </p>
                </div>
                         
                <p>Por sua vez, a iniciativa popular consiste na apresentação de projeto de lei à Câmara dos Deputados, realizada por pelo menos um por cento dos eleitores do país. A <strong>Lei da Ficha Limpa</strong>, por exemplo, foi uma lei de iniciativa popular aprovada pelo Congresso Nacional, que impede a eleição de pessoas condenadas por <strong>corrupção</strong>.</p>

                
                
                    
                            
                            

                            
          
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
                    <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.2.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
