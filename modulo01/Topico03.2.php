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
                <p class="SubTitulo">03.2 - Controle Social da Administração Pública</p>
                <hr>


                <p>Quanto à participação social na gestão pública, a Constituição dispõe sobre o estabelecimento de Conselhos Gestores de Políticas Públicas com representação do Estado e da sociedade civil. A criação dos referidos conselhos constitui em alguns setores, condição legal para o repasse verbas públicas, cabendo-lhes atuar na fiscalização dos gastos das receitas transferidas aos Municípios pela União ou pelos Estados. </p>
                <p>É previsto ainda a participação dos usuários no acompanhamento da prestação e na avaliação dos serviços públicos por meio de conselhos de usuários. A <strong>Lei nº. 13.460/2017</strong> conceitua usuário como “pessoa física ou jurídica que se beneficia ou utiliza, efetiva ou potencialmente, de serviço público”.</p>

                <br><!-- Accordion Fase 01 - Begin  -->
                <div class="accordion accordion-flush" id="AccordionFase01">
                    <div class="text-center">
                        <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="Item01">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <strong>São direitos básicos do usuário:</strong>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                            <div class="accordion-body">
                                <p>
                                I - Participação no acompanhamento da prestação e na avaliação dos serviços;<br>
                                II - Obtenção e utilização dos serviços com liberdade de escolha entre os meios oferecidos e sem discriminação;<br>
                                III - Acesso e obtenção de informações relativas à sua pessoa constantes de registros ou bancos de dados, observado o disposto no inciso X do caput do art. 5º da Constituição Federal e na Lei nº 12.527, de 18 de novembro de 2011;<br>
                                IV - Proteção de suas informações pessoais, nos termos da Lei nº 12.527, de 18 de novembro de 2011;<br>
                                V - Atuação integrada e sistêmica na expedição de atestados, certidões e documentos comprobatórios de regularidade; e<br>
                                VI - Obtenção de informações precisas e de fácil acesso nos locais de prestação do serviço, assim como sua disponibilização na internet, especialmente sobre:<br></p>

                                <ol type="a" class="Texto">
                                    <li> Horário de funcionamento das unidades administrativas;</li>
                                    <li> Serviços prestados pelo órgão ou entidade, sua localização exata e a indicação do setor responsável pelo atendimento ao público;</li>
                                    <li> Acesso ao agente público ou ao órgão encarregado de receber manifestações;</li>
                                    <li> Situação da tramitação dos processos administrativos em que figure como interessado; e</li>
                                    <li> Valor das taxas e tarifas cobradas pela prestação dos serviços, contendo informações para a compreensão exata da extensão do serviço prestado</li>
                                </ol>
                            
                                
                            </div>
                        </div>
                    </div>                  
                </div><br>

                <br><p>A composição dos conselhos deve observar os critérios de representatividade e pluralidade das partes interessadas, com vistas ao equilíbrio em sua representação, em processo aberto ao público e diferenciado por tipo de usuário a ser representado.</p>


                <!-- Importante -->
                <div class="ImportanteCaixa">
                    <p class="ImportanteTitulo"> Importante</p>
                    <p class="ImportanteTexto"><strong>Atribuições dos Conselhos de Usuários:</strong></p>

                    <ul class="ImportanteTexto none">
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Acompanhar a prestação dos serviços;</li>
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Participar na avaliação dos serviços;</li>
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Propor melhorias na prestação dos serviços;</li>
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.0s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Contribuir na definição de diretrizes para o adequado atendimento ao usuário; e</li>
                        <li class="img-fluid wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i>  Acompanhar e avaliar a atuação do ouvidor.</li>
                    </ul>
                </div>

                
                <br><p>O controle social pressupõe, portanto, não só a efetiva participação da sociedade na formulação e no acompanhamento da implementação de políticas públicas, mas também a fiscalização de serviços e aplicação dos recursos públicos.</p>


               

                
                
                    
                            
                            

                            
          
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
