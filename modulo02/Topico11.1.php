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
                            <p class="SubTitulo">11.1 - Dados Abertos no Brasil</p>
                            <hr>

                            <p>A Lei de Acesso à Informação nacional, Lei 12.527/2011, trouxe a previsão de dados abertos governamentais, como uma das formas de promover a transparência ativa. Em seu artigo 8° traz as seguintes orientações:</p>

                            <div class="bd-callout bd-callout-primary">
                                <p>“<strong>Art. 8°</strong> É dever dos órgãos e entidades públicas promover, independentemente de requerimentos, a divulgação em local de fácil acesso, no âmbito de suas competências, de informações de interesse coletivo ou geral por eles produzidas ou custodiadas.</p>
                                <p>(...)</p>
                                <p><strong>§ 3°</strong> Os sítios de que trata o § 2o deverão, na forma de regulamento, atender, entre outros, aos seguintes requisitos:</p>

                                <ul class="none">
                                    <li>I - Conter ferramenta de pesquisa de conteúdo que permita o acesso à informação de forma objetiva, transparente, clara e em linguagem de fácil compreensão;</li>
                                    <li>II - Possibilitar a gravação de relatórios em diversos formatos eletrônicos, inclusive abertos e não proprietários, tais como planilhas e texto, de modo a facilitar a análise das informações;</li>
                                    <li>III - Possibilitar o acesso automatizado por sistemas externos em formatos abertos, estruturados e legíveis por máquina;</li>
                                    <li>IV - Divulgar em detalhes os formatos utilizados para estruturação da informação;</li>
                                    <li>V - Garantir a autenticidade e a integridade das informações disponíveis para acesso;</li>
                                    <li>VI - Manter atualizadas as informações disponíveis para acesso;</li>
                                </ul>
                                <p>[...]”</p>
                            </div>

                            <p>O governo federal disponibiliza os seus dados abertos por meio do Portal Brasileiro de Dados abertos <a href="https://dados.gov.br/" target=_blank">dados.gov.br</a>. Nele estão contidos apenas dados abertos, mas das mais diversas áreas da administração pública, tais como dados da saúde suplementar, do sistema de transporte, de segurança pública, indicadores de educação, gastos governamentais, processo eleitoral, etc.</p>
                            <p>No entanto, importante mencionar que para a utilização dos dados abertos, é necessário um nível básico de conhecimento técnico. Para aprender como utilizar arquivos de dados, tais como CSV, JSON, XML e outros, o Portal de Dados Abertos indica o Manual do Desenvolvedor, do W3C Brasil, Escola de Dados, da <em>Open Knowledge</em>, ou diversos outros conteúdos que podem ser encontrados na internet.</p>
                            <p>Em 2016, foi publicado o Decreto Federal n.º 8.777/2016, que instituiu a Política de Dados Abertos do Poder Executivo Federal. Nele estão contidas algumas definições importantes como a de dados abertos e a de formato aberto:</p>

                            <ul class="none">
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Dados abertos:</strong> Dados acessíveis ao público, representados em meio digital, estruturados em formato aberto, processáveis por máquina, referenciados na internet e disponibilizados sob licença aberta que permita sua livre utilização, consumo ou cruzamento, limitando-se a creditar a autoria ou a fonte.</li>
                                <li><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Formato aberto:</strong> Formato de arquivo não proprietário, cuja especificação esteja documentada publicamente e seja de livre conhecimento e implementação, livre de patentes ou qualquer outra restrição legal quanto à sua utilização.</li>
                            </ul>

                            <p>Importante destacar também no Decreto Federal n. ° 8.777/2016 os princípios e as diretrizes de dados abertos.</p>

                            <div class="bd-callout bd-callout-primary">
                                <p><strong>Art. 3º</strong> A Política de Dados Abertos do Poder Executivo federal será regida pelos seguintes princípios e diretrizes:</p>

                                <ul class="none">
                                    <li>I - Observância da publicidade das bases de dados como preceito geral e do sigilo como exceção;</li>
                                    <li>II - Garantia de acesso irrestrito às bases de dados, as quais devem ser legíveis por máquina e estar disponíveis em formato aberto;</li>
                                    <li>III - Descrição das bases de dados, com informação suficiente para a compreensão de eventuais ressalvas quanto à sua qualidade e integridade;</li>
                                    <li>IV - Permissão irrestrita de reuso das bases de dados publicadas em formato aberto;</li>
                                    <li>V - Completude e interoperabilidade das bases de dados, as quais devem ser disponibilizadas em sua forma primária, com o maior grau de granularidade possível, ou referenciar as bases primárias, quando disponibilizadas de forma agregada;</li>
                                    <li>VI - Atualização periódica, de forma a garantir a perenidade dos dados, a padronização de estruturas de informação e o valor dos dados à sociedade e atender às necessidades de seus usuários; e</li>
                                    <li>VII - Designação clara de responsável pela publicação, atualização, evolução e manutenção de cada base de dado aberta, incluída a prestação de assistência quanto ao uso de dados</li>
                                </ul>
                            </div>


                            <p>No Estado do Ceará, a previsão de dados abertos está contida na Lei Estadual n.º 15.175/2012, em seu artigo 11, § 3°. Segundo a referida legislação os dados abertos devem ser divulgados em sites institucionais e no Portal da Transparência (Ceará Transparente).</p>

                            <br><!-- Titulo Figura -->
                            <div class="text-center">
                                <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                    <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                </a>
                            </div>

                            <!-- Imagem 02 - MODAL -->
                            <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                        </div>
                                        <div class="modal-footer text-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Imagem 02 - End -->


                            <br><p>O <a href="https://cearatransparente.ce.gov.br/" target="_blank">Ceará Transparente</a>, site da transparência e controle social do Estado do Ceará, permite baixar dados em formatos abertos (CSV e XLS) de diversos relatórios, como os de despesas e receitas do Poder Executivo Estadual.</p>
                    
                            
                                          
          
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
                    <a href="Topico11.php" class="btn btn-outline-success" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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
