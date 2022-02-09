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
                            <p class="SubTitulo">02.3 - Comitê Setorial de Acesso à Informação (CSAI)</p>
                            <hr>

                            <p>O Comitê Setorial de Acesso à Informação (CSAI) tem natureza colegiada, consultiva, propositiva, deliberativa e de caráter permanente, possui a finalidade de assegurar o acesso imediato à informação disponível e propor ao CGAI a classificação de informações no seu âmbito de atuação, devendo reunir-se ordinariamente <strong>uma vez por mês</strong>, em datas preestabelecidas, e extraordinariamente quando convocado pelo seu coordenador (Art. 1° e Art. 7° do Decreto Estadual n° 31.199/2013).</p>
                            <p>Segundo a legislação estadual (Art. 6° do Decreto Estadual n° 31.199/2013) deve ter um Comitê Setorial de Acesso à Informação (CSAI) em cada órgão ou entidade do Poder Executivo. A sua designação se dá mediante portaria da autoridade competente, indicando expressamente a função de cada membro, quais sejam:</p>

                            <ol class="none">
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Titular do órgão ou entidade ou autoridade com subordinação imediata (coordenador);</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Assessor de Desenvolvimento Institucional ou cargo equivalente (na ausência ou impedimento do titular do órgão exerce o cargo de coordenador);</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Ouvidor Setorial;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Responsável pelo Serviço de Informação ao Cidadão.</li>
                            </ol>

                            <p>Em regra, os Comitês Setoriais, quando da solicitação de informação, deverão autorizar ou conceder acesso imediato a informação disponível. Não sendo possível conceder a informação de imediato, <strong>o CSAI possui 20 (vinte) dias (prorrogáveis por mais 10 dias)</strong> para responder a solicitação de informação. Após os prazos citados, não havendo posicionamento por parte do CSAI, nasce para cidadão o direito de interpor recurso junto ao CGAI para posterior deliberação.</p>
                            


                                            
                            

                            

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
                    <a href="Topico02.2.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
