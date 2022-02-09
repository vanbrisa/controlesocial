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
                            <h2 class="Titulo">08 - Transparência Ativa</h2>
                            <hr>

                            <p>O direito de acesso à informação se presta a fornecer ao cidadão as informações detidas pelo Estado, para que seja possível, entre tantas outras coisas, realizar o <strong>CONTROLE SOCIAL</strong>. Esse acesso se dá basicamente de duas maneiras: por meio da chamada <strong>transparência ativa</strong> ou por meio da <strong>transparência passiva</strong>.</p>
                            <p>A informação produzida e custodiada pelo setor público deve estar disponível à sociedade, ressalvadas as exceções previstas em lei. O princípio básico da Lei nº. 15.175/2012, a chamada máxima divulgação, em que a <strong>PUBLICIDADE É A REGRA E O SIGILO A EXCEÇÃO.</strong></p>
                            <p>A divulgação de dados a partir de uma iniciativa da própria administração pública não apenas implica a redução do número de pedidos de acesso, mas também sugere a perspectiva de que cabe ao governo somente a posse de tais documentos, sendo o povo o titular do direito de propriedade da informação pública (ainda que transitoriamente a informação seja sigilosa).</p>
                            <p>A disponibilização da informação de maneira espontânea (proativa) é compreendida como Transparência Ativa. A divulgação de informações na Internet, de modo que qualquer cidadão possa acessá-las diretamente é um exemplo dessa transparência ativa. A Lei nº.15.175/2012, Art. 11 e incisos, prevê um rol de informações que necessariamente devem estar em transparência ativa, independentemente de requerimentos:</p>

                            <ul class="none">
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Registro das competências e estrutura organizacional, endereços e telefones das respectivas unidades e horários de atendimento ao público;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Registros de quaisquer repasses ou transferências de recursos financeiros;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Registro de despesas;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Informações concernentes a procedimentos licitatórios, inclusive os respectivos editais e resultados, bem como a todos os contratos celebrados;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Dados gerais para acompanhamento de programas, ações, projetos e obras de órgãos e entidades;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Respostas a perguntas mais frequentes da sociedade.</li>
                            </ul>

                            <p>Essas informações devem ser apresentadas de modo que sejam: facilmente acessadas, compreendidas, atualizadas, íntegras e autênticas. Esse rol não é exaustivo. Isso significa que as informações obrigatórias não devem ser as únicas que devem ser amplamente divulgadas pelos órgãos públicos. Para alcançar a divulgação máxima das informações públicas, os entes públicos devem disponibilizar por iniciativa própria o máximo de dados que puderem.</p>

                        
                    
                            
                    
                            
                                          
          
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
                    <a href="Topico07.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico09.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
