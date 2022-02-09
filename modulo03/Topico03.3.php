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

                            <!-- Sub Título -->
                            <p class="SubTitulo">03.3 - Do Prazo para Resposta às Manifestações de Ouvidoria</p>
                            <hr>

                            <p>
                                As manifestações de ouvidoria devem ser tratadas e respondidas ao cidadão no prazo <strong>de até 20 dias</strong>, a contar da data do recebimento, independente do meio de entrada, podendo ser <strong>prorrogado</strong> antes de findado o prazo inicial, por um Dirigente do órgão ou entidade <strong>por mais 10 dias</strong>, mediante justificativa circunstanciada do Ouvidor Setorial.
                                <br><br>Após os referidos prazos, à alçada de prorrogação, por mais até 30 dias, será da <u>Coordenação de Ouvidoria da Controladoria e Ouvidoria Geral do Estado</u>, mediante justificativa circunstanciada de um Dirigente do órgão ou entidade responsável pela apuração.
                                <br><br>O Ouvidor Setorial poderá solicitar informações complementares ao manifestante, desde que as informações sejam necessárias à compreensão do objeto da manifestação para que não cause prejuízo ao tratamento e à apuração da demanda, sem prejuízo de complementações supervenientes. Para tanto, o Ouvidor poderá estabelecer um prazo razoável de resposta pelo cidadão, de forma a não comprometer o prazo máximo de resposta de 30 dias.    
                            </p>


                    
                            
                            

                            
          
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
                    <a href="Topico03.2.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
