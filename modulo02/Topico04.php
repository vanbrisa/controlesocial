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
                            <h2 class="Titulo">04 - Publicidade <em>Versus</em> Restrições de Acesso</h2>
                            <hr>

                            <p>As disposições da Lei de Acesso à Informação não excluem as hipóteses de sigilo e segredo de justiça, trazidos em outros regramentos, da mesma forma que permanecem resguardados pelo sigilo, as informações referentes aos segredos industriais dos entes da Administração Pública Indireta que atuem na exploração de atividade econômica, ou mesmo de pessoas ou entidades que mantenham vínculo com a Administração.</p>
                            <p>Seguem algumas hipóteses em que o fundamento para restrição de acesso não é a classificação da informação, mas, sim, a determinação legal estabelecida:</p>

                            <br><!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Sigilo Bancário – Lei Complementar nº.105, de 10 de janeiro de 2001.</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O sigilo bancário pode ser compreendido como o direito de manter, sob segredo, informações relativas a transações bancárias passivas e ativas, conforme estabelece a Lei Complementar n. 105, de 10 de janeiro de 2001. Em seu art. 1º, lê-se que “as instituições financeiras conservarão sigilo em suas operações ativas e passivas e serviços prestados”.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Sigilo Fiscal – Código Tributário Nacional – CTN</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Assim como o sigilo bancário, o sigilo fiscal é ligado à noção de privacidade, isto é, a informações que dizem respeito ao indivíduo na sua esfera privada. São informações protegidas por sigilo fiscal, por exemplo, as relativas a rendas, rendimentos, patrimônio, débitos, créditos, dívidas e movimentação financeira ou patrimonial; as que revelem negócios, contratos, relacionamentos comerciais, fornecedores, clientes e volumes ou valores de compra-e-venda; as relativas a projetos, processos industriais, fórmulas, composição e fatores de produção. 
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>Segredo de Justiça – Código de Processo Penal – CPP</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                O segredo (sigilo) de justiça tem por finalidade a preservação da intimidade do indivíduo. No entanto, em alguns casos o fundamento do segredo de justiça é o interesse social, e não a privacidade dos envolvidos no processo judicial. Esta conclusão é extraída da leitura do art. 5º, LX, da Constituição Federal: “a lei só poderá restringir a publicidade dos atos processuais quando a defesa da intimidade ou o interesse social o exigirem.”.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Segredo Industrial – C.F.</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                A proteção a criações industriais está expressa na CF de 1988, que, em seu art. 5º, XXIX, afirma que </p>

                                                <!-- CITAÇÃO -->
                                                <div class="bd-callout bd-callout-success">
                                                    <p>
                                                        A lei assegurará aos autores de inventos industriais privilégio temporário para sua utilização, bem como proteção às criações industriais, à propriedade das marcas, aos nomes de empresas e a outros signos distintivos, tendo em vista o interesse social e o desenvolvimento tecnológico e econômico do País.<p class="text-end">(BRASIL, 1988, online)</p>  
                                                    </p>
                                                </div>

                                                <p>As criações industriais, desde que registradas ou patenteadas frente ao Instituto Nacional de Propriedade Industrial (INPI), têm o seu uso e gozo protegidos. Nogueira Júnior (2003:98) destaca que “o que se protege através das patentes não é o segredo, mas a exclusividade de fruição das vantagens dos produtos de propriedade industrial e intelectual”.
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
                    <a href="Topico04.1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
