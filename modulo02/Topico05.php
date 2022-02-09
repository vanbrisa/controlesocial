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
                            <h2 class="Titulo">05 - Transparência <em>Versus</em> Direito de Acesso à Informação</h2>
                            <hr>

                            <p>Para alguns estudiosos existem diferenças entre transparência e o direito de acesso à informação. A transparência trata-se, na verdade, de uma questão de “higiene pública”, enquanto direito à informação um assunto relacionado à cidadania.</p>
                            <p>Dessa forma, a transparência é o oposto da obscuridade e da invisibilidade, e como algo essencial para manutenção da “saúde” das instituições públicas.</p>
                            <p>Manter a população informada sobre os atos que são praticados pelos governantes e dar a ela o poder de requisitar informações que não são espontaneamente publicadas é uma forma de minimizar a prática de atos obscuros, invisíveis, ilegais ou amorais. Assim, os dois conceitos estão fortemente ligados e são as bases fundamentais do exercício democrático do poder nas sociedades modernas. <strong>A transparência nas ações do Estado e o direito de requisitar informações são alicerces de uma sociedade democrática</strong>.</p>

                            
                            <div class="bd-callout bd-callout-primary">
                                <center><p><strong>Estudo de Caso Acesso à informação e o direito à educação - caso das admissões escolares (Tailândia)</strong></p></center><br>
                                <p>Em meados de 1998, Natthanit, uma garota tailandesa filha da promotora Sumalee Limpa-Owart, foi reprovada na prova de admissão da escola pública de excelência Katsetsart Demonstration. Ao saber da notícia, Sumalee requereu vista das notas da filha ao reitor da instituição, que se negou a conceder a informação.</p>
                                <p>Sumalee então protocolou o pedido oficialmente perante a Comissão de Informação, órgão que regula o acesso à informação na Tailândia. O pedido desta vez foi concedido e as notas de Natthanit e de todos os aprovados no exame foram classificadas como informação pública, o que significa que a escola estaria obrigada a atender ao pedido da promotora.</p>
                                <p>Ainda assim, a escola se negou a dar vista das notas, alegando que seria necessário consultar autoridades superiores - no caso o Conselho de Estado, o Advogado Geral e o Ministério de Assuntos Universitários – para realizar a publicação de maneira correta e saber como proceder no futuro quanto a essa exigência da Comissão.</p>
                                <p>Além da negativa da escola, os pais de 109 dos 120 aprovados pelo processo no qual Natthanit havia sido reprovada, processaram a promotora, acusando-a de invasão de privacidade e de abuso de poder. Contudo, a Justiça reafirmou que as notas eram informação pública e que Sumalee estava dentro de seus direitos ao exigir a abertura desses dados. Somente após quase 2 anos de luta judicial, Sumalee finalmente teve vista dos resultados nominais das provas. Ela pôde constatar que 38 dos 120 aprovados não haviam apresentado desempenho suficiente para admissão.</p>
                                <p>Observou ainda que todos os aprovados com desempenho inferior à nota de corte eram "dek sen", ou seja, pertencentes a famílias de notável influência econômica ou política.</p>
                                <p>Quando essa informação foi publicada, o Conselho de Estado considerou que o processo seletivo da Katsetsart Demonstration School feria o princípio constitucional de garantia de educação a todos, sem distinção econômica ou política. A decisão determinou que a instituição, assim como outras acusadas de práticas semelhantes, deveria corrigir seu processo de admissão, tendo em vista a igualdade garantida pela Constituição Tailandesa.</p>
                                <p>O caso evidencia que a informação, mesmo quando solicitada para suprir interesses individuais, tem um valor social de controle e regulação fundamentais à democracia.</p>
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
                    <a href="Topico04.1.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico06.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
