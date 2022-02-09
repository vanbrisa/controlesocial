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
            
                <div class="main-content container-fluid" id="#Apresentacao"> <!-- Begin main-content -->
                    <div class="row"> <!-- Begin row -->
                        <div class="col-md-1"></div>
                        
                        <div class="col-md-10"> <!-- Begin col-md-10 -->
                            <div class="page-title Texto">
                            
                            <!-- Título -->
                                <h2 class="Titulo">01 - Contexto Histórico</h2>
                                <hr>

                                    <p>A origem do que hoje chamamos de <a href="https://www.gov.br/ouvidorias/pt-br/cidadao/conheca-a-ouvidoria/historia-das-ouvidorias" target="_blank">Ouvidoria Pública</a> remete à Suécia, onde, em 1809, foi criada a figura do <em>Ombudsman (representante do povo)</em>, cujo objetivo era receber e encaminhar as queixas dos cidadãos relacionadas a serviços públicos. O Ombudsman recebia ainda críticas e sugestões da população, com a missão de agir no interesse do povo junto ao Parlamento.</p>
                                    <p>Posteriormente, vários países passaram a criar essa função, com nomes e configurações diferentes. Na França o termo utilizado é o Médiateur de la Republique; enquanto nos países latinos costuma-se denominar o cargo como Defensor del Pueblo. Nos Estados Unidos foram criadas, a partir da década de 1960, ombudsmen espalhados pela Administração Pública, obedecendo a regulamentos próprios, diferentemente do modelo europeu, em que há apenas um ombudsman, ligado ao Poder Legislativo.</p>
                                    <p>No Brasil, em meados do século XVI foi nomeado o primeiro Ouvidor-Geral, para figurar como os “ouvidos do rei” e para garantir, como órgão do sistema de justiça, a rigorosa aplicação das “leis da metrópole”. Com o processo de emancipação do país, esse instituto português acabou por ser extinto após a independência do Brasil, em 1822.</p>
                                    <p>A primeira ouvidoria pública brasileira foi criada em 1986, no município de Curitiba. Desde então, e em especial desde a promulgação da Constituição Federal de 1988, as ouvidorias públicas evoluíram rapidamente, sob o impulso das reinvindicações populares por participação nas deliberações do Estado.</p>
                                </p>

                                <!-- HR LATERAL VERDE -->
                                <div class="bd-callout bd-callout-success">
                                    <p>
                                        <strong>Outro importante marco é a promulgação da Lei nº. 13.460/2017, conhecida como Código de Defesa dos Usuários do Serviço Público, que reconhece a ouvidoria pública como instituição essencial à boa prestação dos serviços públicos e prevê o estabelecimento das ouvidorias em todos os Poderes e todas as esferas federativas.</strong>
                                    </p>
                                </div>

                                <br><p>
                                    A referida lei definiu ainda as manifestações dos usuários como reclamações, denúncias, sugestões, elogios e demais pronunciamentos que tenham como objeto a prestação de serviços públicos e a conduta de agentes públicos na prestação e fiscalização de tais serviços.
                                </p>

                            


                                                             
                            
                            
                            <br><br><!-- SCRIPT LIGHTBOX -->
                            <script>
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });   

                                $(function () {
                                  $('[data-toggle="tooltip"]').tooltip()
                              })                 
                            </script>



                            </div> <!-- End page-title -->                            
                        </div> <!-- End page-title -->

                        <div class="col-md-1"></div>
                    </div> <!-- End row -->
                    
                    <!-- Botões de navegação -->
                    <div class="text-center">
                        <a href="Apresentacao.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                        <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                    </div>

                </div> <!-- End main-content -->                 

            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
