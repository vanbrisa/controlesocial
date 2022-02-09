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
                            <h2 class="Titulo">06 - Cultura da Transparência</h2>
                            <hr>

                            <p>Para que o povo adquira conhecimento é necessário o acesso às informações e aos dados públicos oficiais produzidos pelo próprio Estado. Ao divulgar suas próprias informações, o Estado coloca os instrumentos necessários à disposição do povo para que possam exercer o controle social, favorecendo assim o fortalecimento da democracia e a prevenção à corrupção.</p>
                            <p>Os líderes políticos tendem a ser mais cautelosos a tomar decisões políticas sabendo que suas ações são acompanhadas pelo povo. Por outro lado, os eleitores têm condições de fazer uma escolha apropriada se tiverem informações sobre as decisões tomadas pelos candidatos no desempenho de seus cargos públicos.</p>
                            <p>Com acesso às informações públicas os cidadãos têm mais condições de acompanhar e avaliar a implementação de políticas públicas e monitorar as decisões de interesse público. Além do que o acompanhamento pelo povo das ações públicas é um complemento indispensável à fiscalização exercida pelos órgãos públicos. </p>
                            <p>Apesar do direito de Acesso à Informação estar assegurado na Constituição Federal, ainda existe no Brasil a cultura de segredo, em que a gestão pública é pautada pelo princípio de que a circulação de informações representa riscos, favorecendo a criação de obstáculos para que as informações sejam disponibilizadas, tais como:</p>

                            <ul class="none">
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O cidadão só pode solicitar informações que lhe digam respeito;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Os dados podem ser utilizados indevidamente por grupos de interesse;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> A demanda do cidadão é um problema: sobrecarrega os servidores e compromete outras atividades;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Cabe sempre à chefia decidir pela liberação ou não da informação;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Os cidadãos não estão preparados para exercer o direito de acesso à informação.</li>
                            </ul>

                            <p>Faz-se necessário trabalhar dentro da administração pública para que a cultura do segredo cesse para dar espaço à cultura de acesso, em que os agentes públicos tenham consciência de que a informação pública pertence ao cidadão e que cabe ao Estado provê-la de forma tempestiva e compreensível e atender eficazmente às demandas da sociedade:</p>

                            <ul class="none">
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A demanda do cidadão é legítima;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O cidadão pode solicitar a informação pública sem necessidade de justificativa;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Existem canais eficientes de comunicação entre governo e sociedade;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Existem regras claras e procedimentos para a gestão das informações;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Na cultura de acesso, o fluxo de informações favorece a tomada de decisões, a boa gestão de políticas públicas e a inclusão do cidadão.</li>
                            </ul>

                           
                    
                            
                                          
          
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
                    <a href="Topico05.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico07.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
