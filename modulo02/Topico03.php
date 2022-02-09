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
                            <h2 class="Titulo">03 - Da Informação Pública</h2>
                            <hr>

                            <p>Neste item, trataremos de alguns aspectos do objeto central do direito de acesso à informação, qual seja, <strong>a informação pública</strong>. Aqui, apresentaremos o conceito, a diferença entre informação pública e pessoal, a classificação, a desclassificação e a reavaliação da informação sigilosa e a publicidade versos restrição de acesso. </p>

                            <!-- Sub Título -->
                            <p class="SubTitulo">03.1 - Conceito de Informação Pública</p>
                            <hr>

                            <p>A própria legislação traz a conceituação de informação pública, mas é de suma importância enfatizarmos a definição doutrinária da informação pública, tendo em vista a sua abordagem ampla, que leva em consideração aspectos que vão além da simples aplicação de uma legislação. Assim, consideraremos, neste curso, o conceito adotado por Batista (2010, p.40) no trabalho de dissertação de mestrado apresentado à Escola de Comunicações e Artes da Universidade de São Paulo. Nesse trabalho a autora assim se manifesta:</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p>
                                    [...] <strong>informação publica é um bem público</strong>, tangível ou intangível, com forma de expressão gráfica, sonora e/ou iconográfica, que consiste num <strong>patrimônio cultural de uso comum da sociedade e de propriedade das entidades/instituições públicas da administração centralizada, das autarquias e das fundações públicas</strong>. A informação pública pode ser produzida pela administração pública ou, simplesmente, estar em poder dela, sem o status de sigilo para que esteja disponível ao interesse público/coletivo da sociedade. Quando acessível à sociedade a informação pública tem o poder de afetar elementos do ambiente, reconfigurando a estrutura social. (grifo nosso)
                                </p>
                            </div>


                            <p>Sobressai do conceito os atributos que dizem respeito à natureza jurídica de <strong>bem público</strong> e à capacidade de afetar elementos da estrutura social. Esse último aspecto diz muito sobre a capacidade de a sociedade poder influenciar a gestão pública, por meio do controle social, evidenciando situações de melhorias, de irregularidades sanáveis ou até mesmo de corrupção no trato da coisa pública.</p>

                            
                            

                            
          
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
                    <a href="Topico02.3.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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
