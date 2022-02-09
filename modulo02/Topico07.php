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
                            <h2 class="Titulo">07 - Diretrizes</h2>
                            <hr>

                            <p>A Lei de Acesso à Informação trouxe <strong>cinco diretrizes</strong> enumeradas no seu artigo 3°, que são as seguintes:</p>

                            <br><!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>I - Observância da publicidade como preceito geral e do sigilo como exceção.</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Trata-se do princípio da publicidade máxima, sendo a regra geral, só se pode negar o acesso se uma dada informação for declarada, de acordo com critérios estabelecidos em lei, como sigilosa.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>II - Divulgação de informações de interesse público, independentemente de solicitações.</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Essa divulgação se chama transparência ativa. A própria Lei Federal 12.527/2011 e a Lei Estadual 15.175/2012 prevêem dispositivos indicando quais informações devem, obrigatoriamente, ser disponibilizadas, independente de requerimento, ressaltando que tais dispositivos não são exaustivos, podendo o órgão competente disponibilizar mais informações do que são obrigados por lei. Possui o intuito de futuramente as informações disponibilizadas ativamente aumentem com o passar do tempo.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>III - Utilização de meios de comunicação viabilizados pela tecnologia da informação.</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Informações de interesse público devem ser disponibilizadas ativamente em sites institucionais e no Portal da Transparência. O estado do Ceará ainda fornece a possibilidade de solicitar informações não disponíveis ativamente através do sistema informatizado SOU/SIC, ferramenta que respeita os prazos e regras previstas em legislação. Para cadastramento de pedidos de informação podem ser utilizados também outros meios tais como e-mail, facebook e twitter.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>IV - Fomento ao desenvolvimento da cultura da transparência na administração pública.</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Incentivar a todos que fazem a administração pública a exercerem a cultura do acesso, da transparência, conscientizando que o cidadão tem o direito de receber a informação que solicita, independente de explicar suas razões e independente das razões apresentadas.
                                            </p>
                                        </div>
                                    </div>
                                </div>   

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>V - Desenvolvimento do Controle Social da administração pública</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                A Administração Pública deve oferecer os instrumentos necessários e incentivar a sociedade a utilizar as informações públicas disponíveis para que possa realizar o Controle Social.
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
                    <a href="Topico06.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico08.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
