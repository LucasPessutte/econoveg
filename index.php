<?php
session_start();
include_once('conn/conexao.php');

if (isset($_SESSION['zKFmdhEHixG9Ej'])) {
    $user_id = $_SESSION['zKFmdhEHixG9Ej'];

    $sql = "SELECT profile_pic FROM users WHERE id = $user_id";
    $res = mysqli_query($conn, $sql);
    foreach ($res as $row) {
        if ($row['profile_pic'] != "") {
            $profile_pic = "data:image/png;base64," . $row['profile_pic'];
        } else {
            $profile_pic = "img/profiledefault.png";
        }
    }

    $style_mainmenu = "style='top: 5px !important'";
} else {
    $profile_pic = "";
    $style_mainmenu = "";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Home</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/vendors.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page">
        <header class="header menu_2">
            <div id="preloader">
                <div data-loader="circle-side"></div>
            </div>
            <div id="logo">
                <a href="./"><img src="img/logo.png" width="149" height="42" alt=""></a>
            </div>
            <ul id="top_menu">
                <li><a href="#0" class="search-overlay-menu-btn">Search</a></li>

                <?php if (isset($_SESSION['zKFmdhEHixG9Ej'])) { ?>
                    <li>
                        <a href="conteudos/perfil/">
                            <img src="<?= $profile_pic ?>" class="img-profile-nav">
                        </a>
                    </li>

                <?php } else { ?>
                    <li>
                        <a href="login/" class="login"> &nbsp; </a>
                    </li>
                    <li class="hidden_tablet">
                        <a href="cadastro/" class="btn_1 a-outline-blue rounded">Cadastre-se</a>
                    </li>
                <?php } ?>
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu" <?= $style_mainmenu ?>>
                <ul>
                    <li>
                        <span>
                            <a href="./">Home</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/projetos/">Município</a>
                        </span>
                        <ul>
                            <li><a href="conteudos/projetos/">Proposituras</a></li>
                            <li><a href="conteudos/transparencia/">Transparência</a></li>
                            <li><a href="conteudos/vereadores/">Vereadores</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/projetos/">Projetos</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/artigos/">Artigos</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/sobre/">Sobre Nós</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/feedback/">Feedbacks</a>
                        </span>
                    </li>
                    <!-- <li><span><a href="#0">Buy template</a></span></li> -->
                </ul>
            </nav>
            <!-- Search Menu -->
            <div class="search-overlay-menu">
                <span class="search-overlay-close">
                    <span class="closebt"><i class="ti-close"></i></span>
                </span>
                <form role="search" id="searchform" method="get">
                    <input value="" name="q" type="search" placeholder="Pesquisar..." />
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </header>

        <!-- /header -->

        <main>
            <section class="hero_single">
                <div class="wrapper">
                    <div class="container">
                        <img src="img/analisaimg/analisabrancosemfundo.png" alt="AnalisaItapê">
                    </div>
                    <a href="#first_section" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
                </div>
            </section>
            <!-- /hero_single -->

            <div class="features clearfix">
                <div class="container">
                    <ul>
                        <li><i class="pe-7s-target"></i>
                            <h4>Encontre</h4><span>os projetos que procura</span>
                        </li>
                        <li><i class="pe-7s-display1"></i>
                            <h4>Analise</h4><span>a política municipal</span>
                        </li>
                        <li><i class="pe-7s-star"></i>
                            <h4>Avalie</h4><span>de acordo com sua decisão</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /features -->

            <div class="container-fluid margin_120_0" id="first_section">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Confira os projetos</h2>
                    <p class="subtitle-grey">Que estão entre os mais bem avaliados</p>
                </div>
                <div id="reccomended" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <!-- <a href="#0" class="wish_bt"></a> -->
                                <a href="conteudos/detalhes/">
                                    <div class="preview"><span>Detalhes do projeto</span></div><img src="img/analisaimg/projetoimg.png" class="img-fluid" alt="">
                                </a>
                                <!-- <div class="price">$39</div> -->
                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>Projeto de Lei 00/2022</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                            </div>
                            <ul class="d-flex justify-content-end">
                                <li><a href="conteudos/detalhes/">+Ver mais</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <!-- <a href="#0" class="wish_bt"></a> -->
                                <a href="conteudos/detalhes/">
                                    <div class="preview"><span>Detalhes do projeto</span></div><img src="img/analisaimg/reqimg.png" class="img-fluid" alt="">
                                </a>
                                <!-- <div class="price">$39</div> -->
                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>Requerimento 00/2022</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                            </div>
                            <ul class="d-flex justify-content-end">
                                <li><a href="conteudos/detalhes/">+Ver mais</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <!-- <a href="#0" class="wish_bt"></a> -->
                                <a href="conteudos/detalhes/">
                                    <div class="preview"><span>Detalhes do projeto</span></div><img src="img/analisaimg/mocoesimg.png" class="img-fluid" alt="">
                                </a>
                                <!-- <div class="price">$39</div> -->
                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>Persius delenit has cu</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                            </div>
                            <ul class="d-flex justify-content-end">
                                <li><a href="conteudos/detalhes/">+Ver mais</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <!-- <a href="#0" class="wish_bt"></a> -->
                                <a href="conteudos/detalhes/">
                                    <div class="preview"><span>Detalhes do projeto</span></div><img src="img/analisaimg/complementimg.png" class="img-fluid" alt="">
                                </a>
                                <!-- <div class="price">$39</div> -->
                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>Persius delenit has cu</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                            </div>
                            <ul class="d-flex justify-content-end">
                                <li><a href="conteudos/detalhes/">+Ver mais</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <!-- <a href="#0" class="wish_bt"></a> -->
                                <a href="conteudos/detalhes/">
                                    <div class="preview"><span>Detalhes do projeto</span></div><img src="img/analisaimg/indicaimg.png" class="img-fluid" alt="">
                                </a>
                                <!-- <div class="price">$39</div> -->
                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>Persius delenit has cu</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                            </div>
                            <ul class="d-flex justify-content-end">
                                <li><a href="conteudos/detalhes/">+Ver mais</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box_grid">
                            <figure>
                                <!-- <a href="#0" class="wish_bt"></a> -->
                                <a href="conteudos/detalhes/">
                                    <div class="preview"><span>Detalhes do projeto</span></div><img src="img/analisaimg/projresimg.png" class="img-fluid" alt="">
                                </a>
                                <!-- <div class="price">$39</div> -->
                            </figure>
                            <div class="wrapper">
                                <small>Category</small>
                                <h3>Persius delenit has cu</h3>
                                <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                            </div>
                            <ul class="d-flex justify-content-end">
                                <li><a href="conteudos/detalhes/">+Ver mais</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /item -->
                </div>
                <!-- /carousel -->
                <div class="container">
                    <p class="btn_home_align"><a href="conteudos/projetos/" class="btn_1 rounded">Ver todos os projetos</a></p>
                </div>
                <!-- /container -->
                <hr>
            </div>
            <!-- /container -->

            <div class="container margin_30_95">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Confira nossos artigos</h2>
                    <p class="subtitle-grey">Política & Conhecimento</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                        <a href="conteudos/artigo/" class="grid_item">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <img src="http://via.placeholder.com/800x533/ccc/fff/course_1.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <small><i class="fas fa-calendar-day"></i>11/12/2022</small>
                                    <h3>O que são projetos de lei?</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                        <a href="conteudos/artigo/" class="grid_item">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <img src="http://via.placeholder.com/800x533/ccc/fff/course_2.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <small><i class="fas fa-calendar-day"></i>11/12/2022</small>
                                    <h3>O que são projetos de lei?</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                        <a href="conteudos/artigo/" class="grid_item">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <img src="http://via.placeholder.com/800x533/ccc/fff/course_3.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <small><i class="fas fa-calendar-day"></i>11/12/2022</small>
                                    <h3>O que são projetos de lei?</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                        <a href="conteudos/artigo/" class="grid_item">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <img src="http://via.placeholder.com/800x533/ccc/fff/course_4.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <small><i class="fas fa-calendar-day"></i>11/12/2022</small>
                                    <h3>O que são projetos de lei?</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                        <a href="conteudos/artigo/" class="grid_item">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <img src="http://via.placeholder.com/800x533/ccc/fff/course_5.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <small><i class="fas fa-calendar-day"></i>11/12/2022</small>
                                    <h3>O que são projetos de lei?</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                    <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
                        <a href="conteudos/artigo/" class="grid_item">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <img src="http://via.placeholder.com/800x533/ccc/fff/course_6.jpg" class="img-fluid" alt="">
                                <div class="info">
                                    <small><i class="fas fa-calendar-day"></i>11/12/2022</small>
                                    <h3>O que são projetos de lei?</h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <!-- /grid_item -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->

            <div class="call_section">
                <div class="container clearfix">
                    <div class="col-lg-5 col-md-6 float-right wow position-relative" data-wow-offset="250">
                        <div class="block-reveal">
                            <div class="block-vertical"></div>
                            <div class="box_1">
                                <h3>Ajude a equipe AnalisaItapê</h3>
                                <p>Está gostando da plataforma AnalisaItapê? Auxilie com melhorias e sugestões. Faça parte dessa jornada! </p>
                                <a href="conteudos/feedback/" class="btn_1 rounded">Clique aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/call_section-->
        </main>
        <!-- /main -->

        <footer>
            <div class="container margin_120_95">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-md-12">
                        <p><img src="img/logo.png" width="149" height="42" alt=""></p>
                        <p>O AnalisaItapê será seu aliado na participação política de Itapetininga. Sua opinião faz toda a diferença.</p>
                        <div class="follow_us">
                            <ul>
                                <li>Follow us</li>
                                <!-- <li><a href="#0"><i class="ti-facebook"></i></a></li> -->
                                <li><a href="#0"><i class="ti-instagram"></i></a></li>
                                <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#0"><i class="ti-email"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ml-lg-auto">

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5>Parceiros</h5>
                        <ul class="contacts">
                            <li><a href="https://www.instagram.com/evolutionsoft/" target="_blank">EvolutionSoft</a></li>
                            <li><a href="https://fatecitapetininga.edu.br/" target="_blank">Fatec Itapetininga</a></li>
                            <li><a href="https://www.cps.sp.gov.br/" target="_blank">Centro Paula Souza</a></li>
                        </ul>
                    </div>
                </div>
                <!--/row-->
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div id="copy">© AnalisaItapê</div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <!-- COMMON SCRIPTS -->

    <!-- COMMON SCRIPTS -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
    <script src="assets/validate.js"></script>
</body>

</html>