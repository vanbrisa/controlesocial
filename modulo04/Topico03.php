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

                            <p class="Titulo">03 - Orçamento Programa</p>
                            <hr>


                            <p>
                                A evolução do orçamento trouxe novas funções e atualmente ele se apresenta não apenas como uma peça de controle, mas como um instrumento de gestão com indicadores, metas e objetivos a partir de planos e programas estruturados por meio de planejamento. É o chamado orçamento - programa.
                                <br><br>A Constituição Federal instituiu a integração entre Plano Plurianual - PPA, Lei de Diretrizes Orçamentárias - LDO e Lei Orçamentária Anual – LOA <strong>(Art.165 - CF)</strong>.
                            </p>

                            <br><!-- Sub Título -->
                            <p class="SubTitulo">03.1 - Plano Plurianual – PPA</p>
                            <hr>

                            <p>
                                O trecho constitucional que trata do PPA é o seguinte:
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p>
                                    <em>A lei que instituir o PPA estabelecerá, de forma regionalizada, as <strong>diretrizes, objetivos e metas</strong> da administração pública federal para as despesas de capital e outras delas decorrentes e para as relativas aos programas de duração continuada. <strong>(Art. 165, § 1º)</strong></em>
                                </p>
                            </div>



                                <p><br>
                                    Por força do Ato das Disposições Constitucionais Transitórias (ADCT) a vigência do PPA é para um período de 4 anos, até o término do primeiro exercício financeiro do mandato presidencial <u>subsequente</u>. De modo geral, o cerne do PPA está nas despesas de capital (investimentos públicos e inversões financeiras) além dos programas de duração continuada.
                                    <br><br>É necessário constar no Plano as despesas correntes que surgem com os investimentos. Por exemplo, na construção de um hospital é preciso incluir as despesas com pessoal e administrativas que serão decorrentes da despesa de capital original.
                                    <br><br>Nenhum investimento cuja execução ultrapasse um exercício financeiro poderá ser iniciado sem prévia inclusão no plano plurianual, ou sem lei que autorize a inclusão, sob pena <strong>de crime de responsabilidade</strong>. <strong>(Art. 167, § 1º)</strong>.
                                </p>

                                <br><!-- HR LATERAL AZUL -->
                                <div class="bd-callout bd-callout-primary">
                                    <center class="Texto"><strong> O Plano Plurianual - PPA Participativo e Regionalizado</strong></center> <br>   
                                    <p>
                                        <em>É o processo no qual a sociedade tem a oportunidade de opinar, debater, priorizar investimentos e definir questões importantes que envolvem as despesas públicas. A população elege as obras e ações prioritárias que devem ser incluídas na proposta orçamentária. A partir dessas decisões, o dinheiro público gera uma série de benefícios para a população.<em>
                                        </p>
                                    </div>

                                    <br><!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                            <img class="img-fluid" src="imagens/Figura01.png" width="500" alt="Alt da imagem fica aqui">
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
                                                    <p class="TituloFigura"><strong>Figura 01:</strong> PPA Participativo – www.cearatransparente.ce.gov.br</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 01 - End -->

                                    

               

                
                


                
             
               
                    
                            
                            

                            
          
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
                    <a href="Topico03.2.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
