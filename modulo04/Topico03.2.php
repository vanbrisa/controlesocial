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
                            <p class="SubTitulo">03.2 - Lei de Diretrizes Orçamentárias</p>
                            <hr>

                            <p>
                                A LDO também é uma criação da Constituição Federal, cuja função principal é fazer a intermediação entre o PPA e a LOA. Anteriormente não existia qualquer instrumento que conectasse o planejamento de longo prazo com a Lei orçamentária (a LOA). Seguem algumas atribuições da LDO:
                            </p>

                            <ol type="I"><br>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s">indicar as metas e prioridades da administração pública, incluindo as despesas de capital para o próximo exercício financeiro;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s">orientar a elaboração da LOA;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s">dispor sobre alterações na legislação tributária;</li>
                                <li class="img-fluid wow fadeInLeft" data-wow-delay="1.0s">estabelecer a política de aplicação das agências financeiras oficiais de fomento.</li>
                            </ol>


                            <p>
                                Vale ressaltar que ao “dispor sobre alterações na legislação tributária”, a LDO indicará os efeitos que potenciais alterações tributárias (por meio de outras leis) podem ter sobre a previsão de arrecadação que constará da LOA. Portanto, não há influência direta da LDO sobre as alterações da legislação tributária.
                                <br><br>O Anexo de Metas Fiscais integrará, por força da <strong>Lei de Responsabilidade Fiscal</strong>, o projeto de lei de diretrizes orçamentárias, com o estabelecimento de metas anuais, em valores correntes e constantes, relativas a receitas, despesas, resultados nominal e primário e montante da dívida pública, para o exercício a que se referirem e para os dois seguintes.
                            </p>

                            <!-- HR LATERAL AZUL -->
                            <div class="bd-callout bd-callout-primary">
                                <p>
                                    A Lei de Responsabilidade Fiscal - Lei complementar nº 101/2000 - estabeleceu normas de finanças públicas voltadas para a responsabilidade na gestão fiscal para os três poderes: Executivo, Legislativo e Judiciário, estendendo também a disciplina aos Orçamentos da União, dos Estados e dos Municípios.  
                                        <br><br> A responsabilidade na gestão fiscal pressupõe a ação planejada e transparente, em que se previnem riscos e corrigem desvios capazes de afetar o equilíbrio das contas públicas, mediante o cumprimento de metas de resultados entre receitas e despesas e a obediência a limites e condições no que tange a renúncia de receita, geração de despesas com pessoal, da seguridade social e outras, dívidas consolidada e mobiliária, operações de crédito, inclusive por antecipação de receita, concessão de garantia e inscrição em Restos a Pagar.
                                    </p>
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
                    <a href="Topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.3.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
