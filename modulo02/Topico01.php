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
                                <h2 class="Titulo">01 - Conceitos Introdutórios</h2>
                                <hr>
                                
                                <!-- Sub Título -->
                                <p class="SubTitulo">01.1 - O Direito Fundamental de Acesso a Informação</p>
                                <hr>

                                <p>Um primeiro reconhecimento do direito de acesso à informação ocorreu após a segunda guerra mundial, em 1946, por ocasião da primeira Assembleia Geral das Nações Unidas. Nessa ocasião, o acesso à informação foi erigido ao status de um direito fundamental e um fator essencial para promover a paz e o progresso no mundo.</p>
                                <p>Pode-se citar também a Declaração Universal dos Direitos Humanos, proclamada em Assembleia Geral das Nações Unidas, em 1948. A referida Declaração foi referência para as constituições de vários países e democracias modernas. O teor do seu artigo 19 prevê, primariamente, o direito de acesso à informação nos seguintes termos: “Todo ser humano tem direito à liberdade de opinião e expressão; este direito inclui a liberdade de, sem interferência, ter opiniões e de <strong>procurar, receber</strong> e transmitir <strong>informações</strong> e ideias por quaisquer meios e independentemente de fronteiras” (ORGANIZAÇÃO DAS NAÇÕES UNIDAS, 1948, online).</p>
                                <p>Pode ser afirmado, sem dúvida, que há uma conexão clara entre o exercício do direito fundamental de acesso à informação, o controle social, a melhoria da gestão pública e o fortalecimento da democracia. Em uma visão cíclica do fenômeno social temos que o acesso à informação permite o controle social que, por sua vez, traz melhorias na gestão pública fortalecendo a democracia</p>
                                <p>Para que o direito à informação, na prática, seja efetivado, não basta simplesmente exigir que os órgãos públicos atendam aos pedidos de informação, faz-se necessário uma publicação voluntária, de forma proativa, por parte do poder público. O direito fundamental do acesso à informação está tem previsão no art. 5° da Constituição da República nos seguintes termos:</p>

                                <!-- CITAÇÃO -->
                                <div class="bd-callout bd-callout-success">
                                    <p>
                                        Art. 5º Todos são iguais perante a lei, sem distinção de qualquer natureza, garantindo-se aos brasileiros e aos estrangeiros residentes no País a inviolabilidade do direito à vida, à liberdade, à igualdade, à segurança e à propriedade, nos termos seguintes: </p>
                                        <p>[...]</p>
                                        <p>XXXIII - <strong>todos têm direito a receber dos órgãos públicos informações de seu interesse particular, ou de interesse coletivo ou geral, que serão prestadas no prazo da lei, sob pena de responsabilidade</strong>, ressalvadas aquelas cujo sigilo seja imprescindível à segurança da sociedade e do Estado (BRASIL, 1988, online, grifo nosso).</p>

                                    </div>

                                <p>Podemos afirmar que do reconhecimento do direito como fundamental até a sua positivação em constituições, como a brasileira de 1988, um longo período de maturação desse direito se evidenciou, levando a um entendimento amplo da sua importância para a consolidação da democracia.</p>
                                

                                                             
                            
                            
                            <!-- SCRIPT LIGHTBOX -->
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
