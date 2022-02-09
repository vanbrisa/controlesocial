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

                            <P class="Titulo">04 - Orçamento Participativo</P>
                            <hr>

                            <br><p>
                                Inicialmente, iremos apresentar algumas definições de orçamento participativo:
                                <br><br>Para Deusvaldo Carvalho <em>o Orçamento Participativo é um instrumento que serve para alocar os recursos públicos de forma eficiente e eficaz de acordo com as demandas sociais</em>. <strong>Orçamento e Contabilidade Pública (2010: p.20).</strong>
                                <br><br>O orçamento participativo é um importante instrumento de complementação da democracia representativa, pois permite que o cidadão debata e defina os destinos de uma cidade. Nele, a população decide as prioridades de investimentos em obras e serviços a serem realizados a cada ano, com os recursos do orçamento da prefeitura. Além disso, ele estimula o exercício da cidadania, o compromisso da população com o bem público e a coresponsabilização entre governo e sociedade sobre a gestão da cidade. <strong>Valmir Leôncio da Silva. A Nova Contabilidade Aplicada ao Setor Público (2013: p. 32).</strong>
                                <br><br> Fica claro a abrangência do orçamento participativo: uma cidade. No âmbito municipal, a gestão orçamentária participativa incluirá a realização de debates, audiências e consultas públicas sobre as propostas do plano plurianual, da lei de diretrizes orçamentárias e do orçamento anual, como condição obrigatória para sua aprovação pela Câmara Municipal.
                                <br><br>A realização de encontros do poder público com a população, para a definição de gastos, sobretudo com obras e serviços que atendam diretamente os cidadãos, permite a democratização da gestão pública.
                                <br><br>A LRF assevera que aos instrumentos de transparência da gestão fiscal (planos, orçamentos e relatórios fiscais) será dada ampla divulgação, inclusive em meios eletrônicos de acesso público e com o <strong
                                >incentivo à participação popular e realização de audiências públicas</strong
                                >.
                                <br><br>O orçamento participativo, por mais bem instalado que seja numa cidade, não substitui o Poder Legislativo na apreciação da lei orçamentária, mas exige dos indivíduos posturas que vão além do cumprimento de obrigações meramente eleitorais.
                                <br><br>Observa-se, pois, o rompimento na forma habitual de alocação de recursos públicos, onde o cidadão deixa de ser um simples coadjuvante e passa a participar diretamente do processo orçamentário. Por outro lado, à medida que a população se mostra distante das decisões referentes ao dinheiro público, mais as necessidades públicas serão afetadas com a diminuição do cuidado dispensado as mesmas. 
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
                    <a href="Topico03.4.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
