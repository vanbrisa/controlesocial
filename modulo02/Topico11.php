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
                            <h2 class="Titulo">11 - Dados Abertos</h2>
                            <hr>

                            <p>A definição de dados abertos, segundo a <em>Open Knowledge Foundation – OKF</em>, é:</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p class="Texto">
                                    <em>“Dados são abertos quando qualquer pessoa pode livremente usá-los, reutilizá-los e redistribuí-los, estando sujeito à, no máximo, exigência de creditar a autoria e compartilhar pela mesma licença”.</em>
                                </p>
                            </div>

                            <p>Com a abertura de dados do governo, é possível o desenvolvimento de ferramentas cívicas, projetos, análises de políticas públicas, jornalismo de dados. Sendo possível de promover o conhecimento livre em diversos campos da sociedade, tornando a administração pública mais próxima do cidadão e transparente.</p>
                            <p>Com a disponibilização de dados abertos promovemos o conhecimento aberto que, segundo a Open Definition, o termo inclui:</p>

                            <ul class="none">
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Conteúdos como música, filmes, livros;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Dados científicos, históricos, geográficos ou de outros tipos;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Informação governamental e de administração. Segundo a <em>Open Knowledge Foundation – OKF</em> para um dado governamental ser considerado aberto deve ser:</li>
                                
                                    <br><ul class="none">
                                        <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Completo: todo o conteúdo disponível e não partes dele;</li>
                                        <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Primário: dados publicados na forma que está na fonte, sem alterações;</li>
                                        <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Atualizados: os dados devem ser publicados assim que gerados para preservar o seu valor;</li>
                                        <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Acessíveis: os dados devem estar disponíveis para o maior público possível, dessa forma devem estar disponíveis na internet;</li>
                                        <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Processáveis por máquina: os dados devem estar razoavelmente estruturados para possibilitar o seu processamento automatizado, de forma a possibilitar a análise de grandes quantidades de registros sem intervenção manual.</li>
                                    </ul><br>

                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Não é necessária a identificação para acessá-los: deve ser de livre acesso a todos, não sendo permitido nenhum tipo de cadastro para acessá-los;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> São disponibilizados em formatos não proprietários: os dados estão disponíveis em um formato sobre o qual nenhum ente detenha controle exclusivo;</li>
                                <li><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> São livres de licença: os dados não estão sujeitos a regulações de direitos autorais, marcas, patentes ou segredo industrial. Sendo assim, não são considerados dados abertos:</li>

                                    <br><ul class="none">
                                        <li><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados que não estão disponíveis na internet;</li>
                                        <li><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados que estão disponíveis na internet, porém em formatos proprietários, isto é, que necessitam de um software específico para acessá-los;</li>
                                        <li><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados em disponíveis em Portable Document Format (PDF) ou em formato de imagem, que não são facilmente processáveis por máquina;</li>
                                        <li><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados que, para serem acessados, requerem a identificação do interessado;</li>
                                        <li><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados desatualizados;</li>
                                        <li><i class="fa fa-cog CorVerdeClaroEstado"></i> Dados com restrições de licença, ou seja, que não podem ser livremente compartilhados.</li>
                                    </ul>
                                </ul>
                            </ul>

                            <p>Em nível mundial, vale destacar a atuação em dados abertos dos Estados Unidos e do Reino Unido que são consideradas por especialistas exemplos a serem seguidos por outras nações.</p>
                            <p>No <a href="https://www.data.gov/" target="_blank">data.gov</a> e no <a href="https://data.gov.uk/" target="_blank">data.gov.uk</a>, respectivamente, Estados Unidos e Inglaterra disponibilizam milhares de bases de dados em estado bruto – são 3.800 no site americano e 8.000 no britânico -, separam os dados por órgão governamental e têm ambos um eficiente mecanismo de busca, essencial num ambiente que trabalha com um enorme universo de dados.</p>

                            
                            
                                          
          
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
                    <a href="Topico10.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico11.1.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
                </div>

            </div> <!-- CONTEUDO FIM -->
            
            <!-- FOOTER -->
            <?php include('layout/footer.php') ?>
        
        </div> <!-- DIV MAIN FIM -->
        
        <!-- FOOTER JS -->
        <?php include('layout/js.php') ?>

</body>
</html>
