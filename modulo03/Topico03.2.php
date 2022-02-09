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
                            <p class="SubTitulo">03.2 - Das Manifestações de Ouvidoria</p>
                            <hr>

                            <p>
                                O Decreto Estadual nº 33.485/2020 classifica as manifestações de ouvidoria (<strong>demandas apresentadas pelos usuários</strong>) nos mesmos moldes da Lei nº 13.460/2017, compreendendo:
                            </p>

                            <!-- HR LATERAL AZUL -->
                            <div class="bd-callout bd-callout-primary">
                                <ol type="I">
                                    <li><strong>Sugestão</strong>: proposição de ideia ou formulação de proposta de uma nova política ou serviço público ou aprimoramento de um já existente;</li>
                                    <li><strong>Elogio</strong>: demonstração, reconhecimento ou satisfação sobre política ou serviço público oferecido ou atendimento recebido;</li>
                                    <li><strong>Solicitação</strong>: requerimento de adoção de providência por parte da Administração Pública ou prestador responsável pela política ou prestação de um serviço público;</li>
                                    <li><strong>Reclamação</strong>: demonstração de insatisfação relativa à política ou serviço público;</li>
                                    <li><strong>Denúncia</strong>: relato de ato ilícito ou irregular, cuja resolução dependa da atuação dos órgãos apuratórios competentes.</li>
                                </ol>

                            </p>
                        </div>

                        <br><p>
                            Vale ressaltar que em relação à denúncia vislumbram-se duas situações: a <strong>denúncia contra o estado</strong> nos atos cometidos por servidor, colaborador, órgão, entidade ou prestador de serviço público e que acarretam algum dano para o estado ou para o serviço público. Já a <strong>denúncia para o estado</strong> configura-se nos atos cometidos por pessoa física ou jurídica que não possuam vínculo com o estado e que necessite de atuação do poder de polícia do estado para resolução de danos causados a terceiros.
                            <br><br>As Ouvidorias assegurarão ao manifestante <strong>a proteção de sua identidade</strong> e demais atributos de identificação (com a proteção do nome, endereço e demais dados de qualificação dos manifestantes que serão documentados separadamente) nos termos das leis 12.527/2011, 13.460/2017 e 13.709/2018.
                            <br><br>As manifestações relacionadas a objetos de processos em tramitação na esfera judicial não serão tratadas pelos órgãos e entidades do Sistema Estadual de Ouvidoria, contudo a Ouvidoria Setorial pode auxiliar o cidadão na tramitação interna, bem como auxiliar a gestão na identificação de problemas nos processos, políticas e serviços que envolvem a referida demanda.
                            <br><br>As Ouvidorias Setoriais, inclusive aquelas que por força de legislação ou regulamento específico federal, tenham que dar tratamento de manifestações por meio de ferramentas informatizadas de utilização nacional, deverão encaminhar mensalmente à Controladoria e Ouvidoria Geral os dados quantitativos das manifestações registradas no sistema próprio, relativos ao mês anterior, até que finalizada as integrações.
                            <br><br>No Estado do Ceará, as manifestações de ouvidoria serão recepcionadas por meio dos seguintes canais:   
                        </p>

                        <!-- HR LATERAL AZUL -->
                        <div class="bd-callout bd-callout-primary">
                            <ol type="I"><br>
                                <li>Central de Atendimento Telefônico - Central 155, gerenciada pela Controladoria e Ouvidoria Geral do Estado;</li><br>
                                <li>Plataforma Ceará Transparente, ou outra ferramenta informatizada gerenciada pela Controladoria e Ouvidoria Geral do Estado;</li><br>
                                <li>mensagens eletrônicas encaminhadas para o endereço <a href="mailto:ouvidoria.geral@cge.ce.gov.br" target="_blank">ouvidoria.geral@cge.ce.gov.br</a>, gerenciado pela Controladoria e Ouvidoria Geral do Estado;</li><br>
                                <li>redes sociais, cujas contas sejam gerenciadas pela Controladoria e Ouvidoria Geral do Estado;</li><br>
                                <li>atendimento presencial, disponibilizado pelas Ouvidorias Setoriais dos Órgãos e Entidades do Poder Executivo Estadual.</li><br>
                            </ol>
                        </div>

                        <p><br>
                            Todas as manifestações de ouvidoria recebidas pelo Poder Executivo Estadual deverão ser registradas na plataforma <strong>Ceará Transparente</strong>, independente do canal utilizado pelo cidadão, <strong>compreendendo o registro, tratamento e retorno ao cidadão</strong>.
                        </p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                            </a>
                        </div>

                        <!-- Imagem 01 - MODAL -->
                        <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">
                                        <p class="TituloFigura"><strong>Figura 01:</strong> Ceará Transparente</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 01 - End -->
                    </div>

                    <p><br>
                        O conteúdo de ouvidoria padronizado pela Controladoria e Ouvidoria Geral do Estado e o acesso ao Ceará Transparente deverão estar disponíveis na página inicial dos sites institucionais de todos os órgãos e entidades do Poder Executivo Estadual.
                        <br><br>As ouvidorias poderão receber e <strong>coletar informações</strong> junto aos usuários de serviços públicos com a finalidade <strong>de avaliar a prestação de tais serviços</strong>, bem como auxiliar na detecção e correção de irregularidades na gestão, não se tratando, nesses casos, de manifestação de ouvidoria.
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
