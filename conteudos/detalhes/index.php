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
    <title>AnalisaItapê | Detalhes</title>

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
    <link href="../../css/skins/square/blue.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page" class="theia-exception">

        <header class="header menu_2">
            <?php include('../../components/header.php') ?>
        </header>
        <!-- /header -->

        <main>
            <section id="hero_in" class="courses">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Detalhes</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="bg_color_1">
                <nav class="secondary_nav sticky_horizontal">
                    <div class="container">
                        <ul class="clearfix">
                            <li><a href="#description" class="active">Informações Básicas</a></li>
                            <li><a href="#lessons">Ementa</a></li>
                            <li><a href="#reviews">Avaliações</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="container margin_60_35">
                    <div class="row">
                        <div class="col-lg-8">

                            <section id="description">
                                <h2>Informações Básicas</h2>
                                <p>Per consequat adolescens ex, cu nibh commune temporibus vim, ad sumo viris eloquentiam sed. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit
                                    an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
                                <ul class="list_ok">
                                    <li>
                                        <div class="div-i-detalhes">
                                            <i class="fas fa-envelope-open-text i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Título</h6>
                                            <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="div-i-detalhes">
                                            <i class="fas fa-calendar-alt i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Data</h6>
                                            <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="div-i-detalhes">
                                            <i class="fas fa-user-tie i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Autoria</h6>
                                            <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="div-i-detalhes">
                                            <i class="fas fa-cogs i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Situação</h6>
                                            <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="div-i-detalhes">
                                            <i class="fas fa-clipboard-list i-detalhes ms-1"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Protocolo</h6>
                                            <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="div-i-detalhes">
                                            <i class="fas fa-trophy i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Classificação</h6>
                                            <p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
                                        </div>
                                    </li>

                                </ul>
                                <hr>
                                <h5 id="lessons">A ementa do projeto</h5>
                                <p>Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate
                                    pertinacia eum at. Mea appareat omittantur eloquentiam ad, nam ei quas oportere democritum. Prima causae admodum id est, ei timeam inimicus sed. Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis,
                                    tamquam vulputate pertinacia eum at.</p>
                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="bullets">
                                            <li>Dolorem mediocritatem</li>
                                            <li>Mea appareat</li>
                                            <li>Prima causae</li>
                                            <li>Singulis indoctum</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="bullets">
                                            <li>Timeam inimicus</li>
                                            <li>Oportere democritum</li>
                                            <li>Cetero inermis</li>
                                            <li>Pertinacia eum</li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- /row -->
                            </section>
                            <!-- /section -->

                            <section id="reviews">
                                <h2>Avaliações</h2>
                                <div class="reviews-container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div id="review_summary">
                                                <strong>4.7</strong>
                                                <div class="rating">
                                                    <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                                </div>
                                                <small>4 Avaliações</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
                                            </div>
                                            <!-- /row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-9">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
                                            </div>
                                            <!-- /row -->
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>

                                <hr>

                                <h4>Faça sua avaliação</h4>
                                <p>Qual sua opinião sobre o projeto? Deixe sua avaliação!</p>
                                <div id="message-contact"></div>
                                <form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
                                    <input type="hidden" id="num_rating_stars" name="num_rating_stars">
                                    <div class="rating rating-star">
                                        <i id="i-rating-star-5" onclick="ratingClick(5)" class="class-rating-star icon_star fa-2x c-pointer"></i>
                                        <i id="i-rating-star-4" onclick="ratingClick(4)" class="class-rating-star icon_star fa-2x c-pointer"></i>
                                        <i id="i-rating-star-3" onclick="ratingClick(3)" class="class-rating-star icon_star fa-2x c-pointer"></i>
                                        <i id="i-rating-star-2" onclick="ratingClick(2)" class="class-rating-star icon_star fa-2x c-pointer"></i>
                                        <i id="i-rating-star-1" onclick="ratingClick(1)" class="class-rating-star icon_star fa-2x c-pointer"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="input">
                                                <input class="input_field" type="text" id="name_contact" name="name_contact">
                                                <label class="input_label">
                                                    <span class="input__label-content">Título</span>
                                                </label>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <span class="input">
                                        <textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;" required></textarea>
                                        <label class="input_label">
                                            <span class="input__label-content">Seu comentário</span>
                                        </label>
                                    </span>
                                    <p class="add_top_30">
                                        <input type="submit" value="Avaliar" class="btn_1 rounded">
                                    </p>
                                </form>

                                <hr>

                                <div id="comments" class="reviews-container">
                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar1.jpg" alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rating">
                                                <i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                            </div>
                                            <div class="rev-info">
                                                Admin – 24/12/2022:
                                            </div>
                                            <div class="rev-text">
                                                <h5>Titulo</h5>
                                                <p>
                                                    Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /review-box -->
                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar2.jpg" alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rating">
                                                <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                            </div>
                                            <div class="rev-info">
                                                Ahsan – 24/12/2022:
                                            </div>
                                            <div class="rev-text">
                                                <h5>Titulo</h5>
                                                <p>
                                                    Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /review-box -->
                                    <div class="review-box clearfix">
                                        <figure class="rev-thumb"><img src="http://via.placeholder.com/150x150/ccc/fff/avatar3.jpg" alt="">
                                        </figure>
                                        <div class="rev-content">
                                            <div class="rating">
                                                <i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
                                            </div>
                                            <div class="rev-info">
                                                Sara – 24/12/2022:
                                            </div>
                                            <div class="rev-text">
                                                <h5>Titulo</h5>
                                                <p>
                                                    Sed eget turpis a pede tempor malesuada. Vivamus quis mi at leo pulvinar hendrerit. Cum sociis natoque penatibus et magnis dis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /review-box -->
                                </div>
                                <!-- /review-container -->
                            </section>
                            <!-- /section -->
                        </div>
                        <!-- /col -->

                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail">
                                <figure>
                                    <a class="video"><img src="../../img/analisaimg/reqimg.png" alt="" class="img-fluid"></a>
                                </figure>
                                <div class="price">
                                    Nome do projeto
                                </div>
                                <!-- <a href="#0" class="btn_1 full-width">Purchase</a> -->
                                <div class="btn-review">
                                    <a href="#comments" class="btn_1 full-width outline"><i class="fas fa-comment me-2"></i>Comentários</a>
                                </div>
                                <!-- <div id="list_feat">
                                    <h3>What's includes</h3>
                                    <ul>
                                        <li><i class="icon_mobile"></i>Mobile support</li>
                                        <li><i class="icon_archive_alt"></i>Lesson archive</li>
                                        <li><i class="icon_mobile"></i>Mobile support</li>
                                        <li><i class="icon_chat_alt"></i>Tutor chat</li>
                                        <li><i class="icon_document_alt"></i>Course certificate</li>
                                    </ul>
                                </div> -->
                            </div>
                        </aside>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_color_1 -->
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