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
                            <p class="SubTitulo">03.4 - Créditos Adicionais</p>
                            <hr>

                            <p>
                                Créditos Adicionais são as autorizações de despesa não computadas ou insuficientemente dotadas na Lei Orçamentária. É comum durante a execução do orçamento, ao longo do exercício, ocorrerem situações que alteram direta ou indiretamente a arrecadação das receitas ou a execução das despesas, como fatos imprevisíveis e urgentes (calamidades, comoção interna, guerras), inflação desordenada, estagnação econômica, planejamento mal formulado.  A abertura de créditos adicionais permite a correção dessas possíveis distorções. Os créditos adicionais classificam-se em:
                            </p>

                            <br><!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Suplementares</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                São os créditos destinados a reforço de dotação orçamentária. São autorizados por lei a partir de solicitação do chefe do poder executivo. Vale ressaltar que o Poder Legislativo pode autorizar a abertura de crédito suplementar na própria LOA até determinado valor. Terá vigência dentro do exercício financeiro de sua abertura.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Especiais </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                São créditos adicionais destinados a despesas para as quais não haja dotação orçamentária específica. Devem ser autorizados pelo Poder Legislativo a partir de solicitação do chefe do Poder executivo (encaminha Projeto de Lei). Em regra, terá vigência dentro do exercício financeiro de sua abertura. Se for aberto nos últimos quatro meses do exercício financeiro, poderá ser reaberto pelo seu saldo no ano seguinte.
                                            </p>
                                        </div>
                                    </div>
                                </div>   

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Extraordinários (MP) </strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Créditos adicionais destinados a despesas urgentes e imprevistas, em caso de guerra, comoção intestina ou calamidade pública; encaminhado ao Congresso Nacional pelo Presidente da República através de Medida Provisória (MP). Devido a situação de urgência não necessitam de autorização legislativa prévia para sua abertura. Em regra, terá vigência dentro do exercício financeiro de sua abertura. Se for aberto nos últimos quatro meses do exercício financeiro, poderá ser reaberto pelo seu saldo no ano seguinte.
                                            </p>
                                        </div>
                                    </div>
                                </div>                                            
                            </div>

                
                
                    
                            
                            

                            
          
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
