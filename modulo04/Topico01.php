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
                            
                                <p class="Titulo">01 - Contexto Histórico</p>
                                <hr>

                                <p class="Texto">
                                    Tradicionalmente o orçamento foi concebido como um instrumento de controle a partir da limitação do poder dos governantes, seja do Monarca ou do Poder Executivo. Alguns documentos históricos demarcam a gênese do orçamento:
                                </p>

                                <!-- HR LATERAL VERDE -->
                                <div class="bd-callout bd-callout-success">
                                    <ol class="none">
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Magna Carta</strong> Inglaterra, 1215, a nobreza da Inglaterra impôs ao Rei João Sem Terra que a cobrança de tributos ocorreria com a aprovação do Conselho Comum.</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong><em>Bill of Rights</em></strong>, Inglaterra, 1689, ratificou-se a regra que a cobrança de impostos deveria ser autorizada pelo parlamento. </li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Assembleia Nacional da Virgínia</strong>, EUA, 1765, em contraponto ao domínio inglês e ao aumento do Imposto do selo, os colonos contestavam cobrança de impostos pela Coroa Inglesa.</li>
                                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> <strong>Declaração de Direitos do Homem e do Cidadão</strong>, França, 1789, consagrando que: “Todos os cidadãos têm direito de verificar por si, ou pelos seus representantes, da necessidade de contribuição pública, de consenti-la livremente, de observar o seu emprego e de lhe fixar a repartição, a coleta, a cobrança e a duração”.</li>
                                    </p>
                                </div>


                                <p class="Texto">
                                    No <strong>absolutismo</strong> cabia exclusivamente aos monarcas cobrar impostos e dar destinação ao seu produto, sem fiscalização alguma e sem regras às quais precisasse obedecer. A boa técnica orçamentária limita o aumento de obrigações tributárias, bem como o aumento dos gastos administrativos.  
                                    <br><br>Na clássica lição do Professor Aliomar Baleeiro, <em>o orçamento é um ato pelo qual o Poder legislativo autoriza o Poder executivo, por um certo período e em pormenor, a realização das despesas destinadas ao funcionamento dos serviços públicos e outros fins adotados pela política econômica e geral do país, assim como a arrecadação de receitas criadas em lei.</em>
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
