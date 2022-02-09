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
                            <p class="SubTitulo">03.3 - Classificação, Desclassificação e a Reavaliação de Informações Sigilosas.</p>
                            <hr>

                            <p>A noção de restrição de acesso à informação por meio de classificação encontra amparo na própria Constituição Federal, no inciso XXXIII do art. 5º, que eleva o direito de acesso à informação à categoria de direito fundamental. Ao disciplinar este dispositivo, a Lei de Acesso estabeleceu apenas nove hipóteses de restrição de acesso que representam atributos que podem ser identificados nas informações. Estão sujeitas à classificação, portanto, as informações que possam:</p>

                            <ul class="none">
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Pôr em risco a defesa e a soberania nacionais ou a integridade do território nacional; </li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Prejudicar ou pôr em risco a condução de negociações ou as relações internacionais do País, ou as que tenham sido fornecidas em caráter sigiloso por outros Estados e organismos internacionais; </li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Pôr em risco a vida, a segurança ou a saúde da população; </li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Oferecer elevado risco à estabilidade financeira, econômica ou monetária do País; </li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Prejudicar ou causar risco a planos ou operações estratégicos das Forças Armadas; </li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Prejudicar ou causar risco a projetos de pesquisa e desenvolvimento científico ou tecnológico, assim como a sistemas, bens, instalações ou áreas de interesse estratégico nacional;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Pôr em risco a segurança de instituições ou de altas autoridades nacionais ou estrangeiras e seus familiares;</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Comprometer atividades de inteligência, bem como de investigação ou fiscalização em andamento, relacionadas com a prevenção ou repressão de infrações; e  </li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Colocar em risco a segurança do Presidente e Vice-Presidente da República e respectivos cônjuges e filhos(as).</li>
                            </ul>

                            <p>As informações em poder dos órgãos e entidades públicas, observado o seu teor e em razão de sua imprescindibilidade à segurança da sociedade ou do Estado, poderão ser classificadas em três diferentes graus:</p>

                            <ul class="none">
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Ultrassecreto </strong>- com prazo de sigilo de até 25 anos; </li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Secreto</strong> - com prazo de sigilo de até 15 anos; e </li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Reservado</strong> - com prazo de sigilo de até 5 anos.</li>
                            </ul>

                            <p>No que concerne à desclassificação e reavaliação de informação deve ser afirmado que qualquer interessado pode solicitar ao órgão ou entidade a desclassificação ou a reavaliação da classificação de informações classificadas com grau de sigilo. </p>
                            
                    
                            
                            

                            
          
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
