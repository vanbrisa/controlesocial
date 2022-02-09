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

                            <p class="SubTitulo">02.2 - Canais de comunicação</p>
                            <hr>


                            <p class="Texto">
                                Para cumprir a sua missão, a ouvidoria estimula o diálogo entre o usuário do serviço e o Poder Público. A partir das necessidades dos usuários, a ouvidoria pode estabelecer uma estratégia de comunicação para canalizar os meios que garantam maior acessibilidade.
                                <br><br>Independente do canal por meio do qual as manifestações cheguem à ouvidoria, é muito importante que todas elas sejam adequadamente registradas em um repositório de informação único, de modo que não se perca o controle sobre o seu processo de tratamento e que se consiga, sempre que necessário, gerar informações relevantes sobre o desempenho dos serviços da instituição a qual a ouvidoria esteja vinculada. <strong>A Controladoria Geral da União - CGU</strong> classifica os meios de comunicação da seguinte forma:
                            </p>

                            <!-- Sub Sub Título -->
                            <p class="SubSubTitulo">02.2.1 - Meios de comunicação Físicos</p>
                            <hr>

                            <br><!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item01">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            <strong>Carta</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>O usuário escreve livremente a sua mensagem e a envia para a Ouvidoria por meio dos serviços postais. Para viabilizar essa forma de comunicação, a Ouvidoria precisa divulgar seu endereço. Dependendo do dimensionamento da demanda, pode ser necessário criar uma caixa postal apenas para essa finalidade. Atualmente, não há muitas ouvidorias que recebam um volume significativo de cartas, mas elas são comuns, por exemplo, na Ouvidoria da Secretaria do Desenvolvimento Regional do Ministério da Cidadania e na Ouvidoria do Departamento Penitenciário Nacional.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item02">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                            <strong>Formulário impresso</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Nessa modalidade, a Ouvidoria imprime um formulário com campos pré-definidos para que o usuário preencha. Os campos são dos tipos: nome, endereço, telefone, tipo de manifestação, texto da manifestação, entre outros. Os formulários poderão ser depositados em uma urna criada especificamente para esse fim, coletados em campanhas de ouvidoria ativa, ou enviados pelo serviço postal.
                                            </p>
                                        </div>
                                    </div>
                                </div>                                      
                            </div>

                            <br><br><!-- Sub Sub Título -->
                            <p class="SubSubTitulo">02.2.2 - Meios de comunicação eletrônicos</p>
                            <hr>

                            <br><!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="Item03">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                            <strong>E-mail</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>Por esse meio de comunicação, o usuário escreve livremente sua mensagem. Para que possa utilizá-la, é preciso que a Ouvidoria tenha um endereço eletrônico e que o usuário tenha acesso à internet. Esse é um meio de comunicação utilizado por muitas ouvidorias, mas pode apresentar uma fragilidade: a falta de um sistema de protocolo. Muitas vezes, o usuário envia sua mensagem, mas não recebe um número de registro e nem tem acesso a mecanismos de acompanhamento do andamento da sua manifestação.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item04">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                            <strong>Formulário eletrônico</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Esse atualmente é um dos meios de comunicação mais utilizados pelas ouvidorias. Assim como no formulário escrito, há campos específicos a serem preenchidos. A ouvidoria precisa ter um espaço específico no sítio da instituição e elaborar um modelo de formulário, normalmente vinculados a sistemas eletrônicos, responsáveis pela gestão da informação e dos processos no ambiente corporativo.
                                            </p>
                                        </div>
                                    </div>
                                </div> 

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item05">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                            <strong>Redes sociais, chats e chatbots</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                A maior vantagem das redes sociais, como o Twitter, o Facebook e o Instagram, é que elas são amplamente disseminadas na população brasileira, de tal maneira que o atendimento de ouvidoria, quando feito por meio destas plataformas, toma proveito da familiaridade dos usuários com o meio de comunicação. O maior cuidado da Ouvidoria ao usar as redes sociais como meio de comunicação é a adequação da linguagem  e a existência de scripts adequados de atendimento, que permitam aos servidores da ouvidoria prestar um atendimento padronizado e adequado aos usuários que optam por esse canal. Em geral, o relacionamento com os usuários em redes sociais se dá por meio de canais de “bate papo”, também conhecidos por “chats”. Esses canais podem ser operados por pessoas ou por sistemas que simulam o atendimento humano, os chamados chatbots. 
                                            </p>
                                        </div>
                                    </div>
                                </div>                                                 
                            </div>

                            <br><br><!-- Sub Sub Título -->
                            <p class="SubSubTitulo">02.2.3 - Meios de comunicação oral</p>
                            <hr>

                            <br><!-- Accordion Fase 01 - Begin  -->
                            <div class="accordion accordion-flush" id="AccordionFase01">
                                <div class="text-center">
                                    <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                </div>
                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item06">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                            <strong>Atendimento presencial</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                Em geral, ocorre nas dependências do próprio órgão ou da entidade, preferencialmente em espaço designado especificamente para essa finalidade, de forma a assegurar privacidade ao usuário, e com a acessibilidade necessária. Para além do atendimento nas dependências da instituição, existem, também, ouvidorias que optam por estratégias de atendimento externo, por meio de ouvidorias itinerantes ou ativas, isto é, destacando parte de sua equipe para ir aos locais de concentração dos usuários de serviços públicos para lá fazer a coleta das manifestações.
                                            </p>
                                        </div>
                                    </div>
                                </div>  

                                <div class="accordion-item Texto">
                                    <h2 class="accordion-header" id="Item07">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                            <strong>Telefone</strong>
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                        <div class="accordion-body">
                                            <p>
                                                O usuário se comunica com um atendente da ouvidoria por meio da linha telefônica. Para isso é preciso dimensionar o tamanho da estrutura a ser oferecida. Caso a procura seja pequena, o telefone pode ser ligado a uma única linha direta com um único atendente; ou pode fazer parte de uma central de telefonia, se isso for necessário. Algumas ouvidorias atendem por meio de tridígitos criados especificamente para essa finalidade.
                                            </p>
                                        </div>
                                    </div>
                                </div>                                                 
                            </div>





                            <br><br><p class="text-end"><strong>Fonte: CGU adaptado</strong></p>

            
                                            
                            

                            

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
                    <a href="Topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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
