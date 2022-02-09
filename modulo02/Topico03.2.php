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
                            <p class="SubTitulo">03.2 - Informação Pública Versos Informação Pessoal</p>
                            <hr>

                            <p>Não obstante o conceito de informação pública, acima apresentado, há situações em que podem suscitar dúvidas quanto à natureza pública da informação. Aqui, faremos um contraponto entre a informação pública e a de natureza pessoal. </p>
                            <p>A Lei Estadual n° 15.175/12 definiu em seu art. 3°, inciso I, o conceito de Informação de Interesse Público como sendo <strong>“toda aquela informação que não é de caráter pessoal ou classificada como sigilosa”</strong>. Em seguida, no inciso III do mesmo dispositivo, o legislador estadual afirma que Informação Pessoal é <strong>“aquela relacionada à pessoa natural identificada ou identificável.”</strong> O cerne da questão está na definição do que vem a ser informação de caráter pessoal. </p>
                            <p>Tendo em vista que a Lei de Acesso à Informação não definiu de forma clara o que seriam informações referentes à intimidade, à vida privada, à honra e à imagem do indivíduo deve-se buscar outros dispositivos para aclarar o entendimento sobre o assunto. O STJ, na sua resolução que regulamenta a Lei n. 12.527/2011 no Superior Tribunal de Justiça e dá outras providências, exemplifica o que seria informação pessoal, no artigo 3º, inciso V, senão vejamos:</p>

                            <!-- CITAÇÃO -->
                            <div class="bd-callout bd-callout-success">
                                <p class="Texto">
                                    V – informação pessoal: aquela que diz respeito à intimidade, à vida privada, à honra e à imagem das pessoas, bem como às liberdades e garantias individuais, tais como endereço, telefones residencial e celular, número de inscrição no cadastro de pessoas físicas (CPF), número da carteira de identidade (RG), carteira funcional e passaporte de magistrados e servidores;
                                </p>
                            </div>

                            <p>Por sua vez a LGPD, <strong>Lei n.º 13.709/2018</strong>, estabeleceu novas disposições acerca da matéria, a exemplo da definição de dado pessoal sensível <em>(dado pessoal sobre origem racial ou étnica, convicção religiosa, opinião política, filiação a sindicato ou a organização de caráter religioso, filosófico ou político, dado referente à saúde ou à vida sexual, dado genético ou biométrico, quando vinculado a uma pessoa natural)</em> dentre outras. A LGPD aplica-se ao tratamento de dados pessoais, inclusive nos meios digitais, por pessoa natural ou pessoa jurídica de <strong>direito público ou privado</strong>, a partir dos seguintes fundamentos:</p>

                            <ol type="I">
                                <li> O respeito à privacidade;</li>
                                <li>A autodeterminação informativa;</li>
                                <li>A liberdade de expressão, de informação, de comunicação e de opinião;</li>
                                <li>A inviolabilidade da intimidade, da honra e da imagem;</li>
                                <li>O desenvolvimento econômico e tecnológico e a inovação;</li>
                                <li>A livre iniciativa, a livre concorrência e a defesa do consumidor; e</li>
                                <li>Os direitos humanos e o livre desenvolvimento da personalidade, dignidade e exercício a cidadania pelas pessoas naturais.</li>
                            </ol>


                            <p>O tema ganhou grande destaque principalmente em decorrência do avanço da tecnologia e consequentemente da utilização da internet e redes sociais. Desde a promulgação da nossa Constituição Federal de 1988, já estava previsto o direito da inviolabilidade da intimidade e da vida privada, do sigilo de correspondência e das comunicações telegráficas, de dados e das comunicações telefônicas (Art. 5, X e XII, CF/88).</p>
                            <p>Ante o exposto, e considerando a relevância da matéria, é necessário salientar que informações pessoais terão seu <strong>acesso restrito</strong>, independentemente de classificação de sigilo, pelo prazo máximo de <strong>100 (cem) anos</strong> a contar da sua data de produção, a agentes públicos legalmente autorizados e à pessoa a que elas se referirem.</p>

                            

                            
          
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
