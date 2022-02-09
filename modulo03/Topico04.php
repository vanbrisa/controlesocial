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

                            <p class="Titulo">04 - Carta de Serviços</p>
                            <hr>

                            <!-- Sub Título -->
                            <p class="SubTitulo">04.1 - A Carta de Serviços ao Usuário</p>
                            <hr>

                            <p>
                                Um aspecto importante a ser considerado no controle da prestação dos serviços públicos é a forma de sua divulgação. É dever do Estado divulgar informações acerca da existência dos serviços prestados, bem como as formas de acesso a esses serviços e seus compromissos e padrões de qualidade de atendimento ao público. Visando dar mais visibilidade aos serviços públicos, a Lei nº. 13.460/2017 prevê que órgãos e entidades deverão divulgar a <strong>Carta de Serviços ao Usuário</strong>. 
                            </p>

                            <!-- Importante -->
                            <div class="ImportanteCaixa">
                                <p class="ImportanteTitulo"> Importante</p>
                                <p class="ImportanteTexto">A Carta de Serviços ao Usuário é um documento publicado em página ou portal em que o ente público insere suas informações básicas e lista todos os serviços públicos por ele prestados.</p>
                            </div>

                            <br><p>
                                Essas disposições se sustentam nos princípios de participação do cidadão, acesso à informação e transparência. É necessário definir as etapas, o público-alvo, os locais, os horários e as formas pelas quais os usuários podem ter acesso aos serviços, a partir de um rol mínimo de informações que deverão constar na Carta:
                            </p>

                            <!-- HR LATERAL AZUL -->
                            <div class="bd-callout bd-callout-primary">
                                <p>
                                    <strong>Lei 13.460 - Art. 7º, § 2º:</strong> A Carta de Serviços ao Usuário deverá trazer informações claras e precisas em relação a cada um dos serviços prestados, apresentando, no mínimo, informações relacionadas a:
                                </p>
                                <ol type="I">
                                    <li>Serviços oferecidos;</li>
                                    <li>Requisitos, documentos, formas e informações necessárias para acessar o serviço;</li>
                                    <li>Principais etapas para processamento do serviço;</li>
                                    <li>Previsão do prazo máximo para a prestação do serviço;</li>
                                    <li>Forma de prestação do serviço; e</li>
                                    <li>Locais e formas para o usuário apresentar eventual manifestação sobre a prestação do serviço.</li>
                                </ol>
                            </div>


                            <p><br>
                                Vale destacar que esse conteúdo não é exaustivo. Informações adicionais que possam auxiliar o usuário a compreender e obter o serviço deverá ser incluída no conteúdo da Carta, que será objeto de atualização periódica e de permanente divulgação, mediante publicação em sítio eletrônico do órgão ou entidade na internet <strong>(art. 7º, § 4º)</strong>.
                            </p>

                            <!-- HR LATERAL AZUL -->
                            <div class="bd-callout bd-callout-primary">
                                <center>
                                    <p>
                                        <strong>Benefícios da Carta de Serviços</strong> 
                                    </p>
                                </center><br>
                                <ul class="none">
                                    <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> É possível avaliar, em tempo real, e de forma contínua, a satisfação com o serviço prestado;</li>
                                    <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Permite melhor acompanhamento das políticas públicas por parte dos usuários (controle social);</li>
                                    <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Avaliar se os compromissos firmados nas Cartas de Serviços ao Usuário foram atendidos.</li>
                                </ul>
                            </div>

                            <!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 02 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                            <p class="TituloFigura"><strong>Figura 02:</strong> Carta de Serviços do Poder Executivo Estadual</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 02 - End -->




                        <p><br>
                            A <a href="https://cartadeservicos.ce.gov.br/ConsultaCesec/pg_cs_servico.aspx" target="_blank">Carta de Serviços</a> do poder Executivo Estadual ao Usuário bem estruturada será o instrumento de <strong>transparência</strong> dos serviços públicos oferecidos e dos <strong>compromissos</strong> assumidos pelo Poder Público.
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
                    <a href="Topico03.3.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
