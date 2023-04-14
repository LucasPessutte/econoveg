<?php
session_start();
include_once('../../conn/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Sobre</title>

    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">

    <!-- Favicons-->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">

    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/vendors.css" rel="stylesheet">
    <link href="../../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="../../css/skins/square/grey.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page">

        <header class="header menu_2">
            <?php include('../../components/header.php') ?>
        </header>
        <!-- /header -->

        <main>
            <section id="hero_in" class="about">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Sobre Nós</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="container margin_120_95">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Nosso Princípios</h2>
                    <p class="subtitle-grey">as bases da plataforma</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a class="box_feat c-pointer">
                            <i class="fas fa-search"></i>
                            <h3>Plataforma Acessível</h3>
                            <p>Acesse de onde estiver, quando quiser. Não tenha limites ao explorar e avaliar as informações de Itapetininga.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_feat c-pointer">
                            <i class="fas fa-rocket"></i>
                            <h3>Otimização</h3>
                            <p>Tem o foco na responsividade em qualquer dispositivo. Tornando o acesso fluído e prático para você. </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_feat c-pointer">
                            <i class="fas fa-user-friends"></i>
                            <h3>Direito do Cidadão</h3>
                            <p>As informações públicas são direito do cidadão. Proporcionando a experiência de consulta sem restrições.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_feat c-pointer">
                            <i class="fas fa-star"></i>
                            <h3>Avaliação dos Projetos</h3>
                            <p>A voz do usuário, move as engrenagens da plataforma. Agregando valor aos projetos de lei apresentados. </p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_feat c-pointer">
                            <i class="fas fa-comment-dots"></i>
                            <h3>Interação Social</h3>
                            <p>A interação entre os usuários gera um aglomerado de novas opiniões, com discussões políticas produtivas.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_feat c-pointer">
                            <i class="fas fa-dice"></i>
                            <h3>Elaboração de Dados</h3>
                            <p>As avaliações influenciam em proposituras futuras. Gerando dados fundamentais para novas ideias. </p>
                        </a>
                    </div>
                </div>
                <!--/row-->
            </div>
            <!-- /container -->

            <div class="bg_color_1">
                <div class="container margin_120_95">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>Origem do Projeto</h2>
                        <p class="subtitle-grey">por onde começamos</p>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 wow" data-wow-offset="150" style="align-self: center;">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <img src="../../img/analisaimg/mockup.png" class="img-fluid" alt="">
                            </figure>
                        </div>
                        <div class="col-lg-5">
                            <p>O projeto <b>AnalisaItapê</b> foi idealizado durante uma dinâmica realizada pela faculdade FATEC Itapetininga. Onde foram elaboradas propostas que integrassem tecnologia às necessidades sociais. Sendo o âmbito político escolhido
                                como alvo de desenvolvimento.</p>
                            <p>Em primeiro momento notou-se a carência de plataformas que abordassem as propostas de projetos realizados no munícipio de Itapetininga. Concretizando a elaboração de um meio acessível para consulta destas informações. Agregando
                                também ao <b>nosso maior diferencial: sua voz.</b></p>
                            <p>As avaliações são o elo forte do projeto, agregando valor ao conjunto das opiniões políticas promovidas pela plataforma. Nossa equipe conta com sua colaboração, e desejamos <b>propagar a noção política & social</b> no munícipio
                                de Itapetininga.</p>
                            <p><a href="../feedback">Clique aqui</a> para auxiliar a equipe AnalisaItapê com seu feedback!</p>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <!--/container-->
            </div>
            <!--/bg_color_1-->

            <div class="container margin_120_95">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Nossa equipe</h2>
                    <p class="subtitle-grey">os idealizadores</p>
                </div>
                <div id="carousel-about" class="owl-carousel owl-theme">
                    <div class="item">
                        <a class="c-pointer">
                            <div class="title">
                                <h4>Claudio Campos<em>Marketing & Design</em></h4>
                            </div><img src="../../img/analisaimg/claudio.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a class="c-pointer">
                            <div class="title">
                                <h4>João Gabriel<em>Fullstack Dev & Agile Manager</em></h4>
                            </div><img src="../../img/analisaimg/joao.png" alt="">
                        </a>
                    </div>
                    <div class="item">
                        <a class="c-pointer">
                            <div class="title">
                                <h4>Lucas Silvano<em>Frontend Dev sem cebola</em></h4>
                            </div><img src="../../img/analisaimg/lucas.png" alt="">
                        </a>

                    </div>
                </div>
                <!-- /carousel -->
            </div>
            <!--/container-->
        </main>
        <!--/main-->

        <footer>
            <?php include('../../components/footer.php') ?>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <!-- COMMON SCRIPTS -->
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/common_scripts.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../assets/validate.js"></script>

</body>

</html>