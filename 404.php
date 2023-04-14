<?php
session_start();
include_once('conn/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Análise Municipal</title>

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
                    <li class="hidden_tablet">
                        <a href="conteudos/perfil/" class="btn_1 a-outline-blue rounded"><?= $_SESSION['name'] ?></a>
                    </li>

                <?php } else { ?>
                    <li>
                        <a href="login/" class="login"> &nbsp; </a>
                    </li>
                    <li class="hidden_tablet">
                        <a href="login/" class="btn_1 a-outline-blue rounded">LOGAR</a>
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
            <nav id="menu" class="main-menu">
                <ul>
                    <li>
                        <span>
                            <a href="./">Home</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/projetos/">Projetos</a>
                        </span>
                        <ul>
                            <li><a href="conteudos/projetos/">Categoria 1</a></li>
                            <li><a href="conteudos/projetos/">Categoria 2</a></li>
                            <li><a href="conteudos/projetos/">Categoria 3</a></li>
                            <li><a href="conteudos/projetos/">Categoria 4</a></li>
                            <li><a href="conteudos/projetos/">Categoria 5</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/artigos/">Artigos</a>
                        </span>
                        <ul>
                            <li><a href="conteudos/artigo/">Artigo 1</a></li>
                            <li><a href="conteudos/artigo/">Artigo 2</a></li>
                            <li><a href="conteudos/artigo/">Artigo 3</a></li>
                            <li><a href="conteudos/artigo/">Artigo 4</a></li>
                            <li><a href="conteudos/artigo/">Artigo 5</a></li>
                            <li><a href="conteudos/artigo/">Artigo 6</a></li>
                        </ul>
                    </li>
                    <li>
                        <span>
                            <a href="conteudos/sobre/">Sobre Nós</a>
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
            <div id="error_page">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-7 col-lg-9">
                            <h2>404 <i class="icon_error-triangle_alt"></i></h2>
                            <p>We're sorry, but the page you were looking for doesn't exist.</p>
                            <form>
                                <div class="search_bar_error">
                                    <input type="text" class="form-control" placeholder="What are you looking for?">
                                    <input type="submit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /error_page -->
        </main>
        <!--/main-->

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
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
    <script src="assets/validate.js"></script>


</body>

</html>