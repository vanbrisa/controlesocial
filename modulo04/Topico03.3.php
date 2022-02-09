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
                            <p class="SubTitulo">03.3 - Lei Orçamentária Anual - LOA</p>
                            <hr>

                            <p>
                                No Brasil a LOA não é impositiva, mas sim autorizativa, pois não existe a obrigatoriedade de execução dos gastos fixados em lei por parte do poder executivo.
                                <br><br>A Lei Orçamentária Anual compreenderá em compatibilidade com PPA e com a LDO:  
                            </p>

                            <ol type="I">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"> O orçamento fiscal referente aos Poderes da União, seus fundos, órgãos e entidades da administração direta e indireta, inclusive fundações instituídas e mantidas pelo Poder Público;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"> O orçamento de investimento das empresas em que a União, direta ou indiretamente, detenha a maioria do capital social com direito a voto;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"> O orçamento da seguridade social, abrangendo todas as entidades e órgãos a ela vinculados, da administração direta ou indireta, bem como os fundos e fundações instituídos e mantidos pelo Poder Público.</li>
                            </ol>

                            <p>
                                Ao apresentarmos o princípio orçamentário da unidade/totalidade, já ressaltamos que a LOA é, na verdade, um conjunto de orçamentos que são consolidados em uma única peça para cada esfera do governo.
                                <br><br>Os poderes Legislativo e Judiciário, o Ministério Público e a Defensoria Pública elaborarão suas propostas de Lei Orçamentária dentro dos limites estabelecidos na LDO para consolidação do projeto de lei pelo Poder Executivo que o encaminhará para Poder Legislativo para aprovação.
                                <br><br>Detalhando as etapas que compõem o ciclo orçamentário encontraremos as seguintes:
                            </p>

                            <ol class="none">
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Previsão da receita;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Fixação de valores para as despesas;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Consolidação das propostas setoriais;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Processo legislativo;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Aprovação da lei;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Execução orçamentária;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Acompanhamento e controle;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="2.0s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Avaliação.</li>
                            </ol>

                            <p>
                                É vedado consignar na lei orçamentária crédito com finalidade imprecisa ou dotação ilimitada, bem como a edição de medida provisória sobre planos plurianuais, diretrizes orçamentárias, orçamento, com exceção para abertura de créditos extraordinários.
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
                    <a href="Topico03.4.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
