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
    <title>AnalisaItapê | Projetos</title>

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
                        <h1 class="fadeInUp"><span></span>Projetos</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="filters_listing sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li>
                            <div class="switch-field">
                                <input type="radio" id="all" name="listing_filter" value="all" checked>
                                <label for="all">Todos</label>
                                <input type="radio" id="popular" name="listing_filter" value="popular">
                                <label for="popular">Populares</label>
                                <input type="radio" id="latest" name="listing_filter" value="latest">
                                <label for="latest">Recentes</label>
                            </div>
                        </li>
                        <li>
                            <div class="layout_view">
                                <a id="btn-grid" class="c-pointer">
                                    <i class="icon-th"></i>
                                </a>
                                <a id="btn-list" class="c-pointer active">
                                    <i class="icon-th-list"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <select name="orderby" class="selectbox">
                                <option value="category">Category</option>
                                <option value="category 2">Literature</option>
                                <option value="category 3">Architecture</option>
                                <option value="category 4">Economy</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <!-- /container -->
            </div>
            <!-- /filters -->

            <div class="container margin_60_35">
                <div class="row">
                    <aside class="col-lg-3" id="sidebar">
                        <div id="filters_col">
                            <a data-bs-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filtros </a>
                            <div class="collapse show" id="collapseFilters">
                                <div class="filter_type">
                                    <h6>Category</h6>
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck" checked>all <small>(945)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Architecture <small>(45)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Managment <small>(30)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Business <small>(25)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Litterature <small>(56)</small>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">Biology <small>(10)</small>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="filter_type">
                                    <h6>Rating</h6>
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">
                                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <small>(145)</small></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">
                                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> <small>(25)</small></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">
                                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(68)</small></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">
                                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(34)</small></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" class="icheck">
                                                <span class="rating"><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(10)</small></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/collapse -->
                        </div>
                        <!--/filters col-->
                    </aside>
                    <!-- /aside -->

                    <div class="col-lg-9" id="list_sidebar">
                        <div class="grid-alt-row">
                            <div class="grid-alt-col">
                                <div class="box_list wow">
                                    <div class="grid-alt-card row g-0">
                                        <div class="grid-alt-figure col-lg-6">
                                            <figure class="block-reveal">
                                                <div class="block-horizzontal"></div>
                                                <a href="../detalhes/"><img src="../../img/analisaimg/projetoimg.png" alt="">
                                                    <div class="preview"><span>Detalhes do projeto</span></div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="grid-alt-info col-lg-6">
                                            <div class="wrapper">
                                                <!-- <a href="#0" class="wish_bt"></a> -->
                                                <!-- <div class="price">$39</div> -->
                                                <small>Category</small>
                                                <h3>Persius delenit has cu</h3>
                                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
                                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                                            </div>
                                            <ul class="d-flex justify-content-end">
                                                <!-- <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                                <li><i class="icon_like"></i> 890</li> -->
                                                <li><a href="../detalhes/">+Ver mais</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-alt-col">
                                <div class="box_list wow">
                                    <div class="grid-alt-card row g-0">
                                        <div class="grid-alt-figure col-lg-6">
                                            <figure class="block-reveal">
                                                <div class="block-horizzontal"></div>
                                                <a href="../detalhes/"><img src="../../img/analisaimg/reqimg.png" alt="">
                                                    <div class="preview"><span>Detalhes do projeto</span></div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="grid-alt-info col-lg-6">
                                            <div class="wrapper">
                                                <!-- <a href="#0" class="wish_bt"></a> -->
                                                <!-- <div class="price">$39</div> -->
                                                <small>Category</small>
                                                <h3>Persius delenit has cu</h3>
                                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
                                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                                            </div>
                                            <ul class="d-flex justify-content-end">
                                                <!-- <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                                <li><i class="icon_like"></i> 890</li> -->
                                                <li><a href="../detalhes/">+Ver mais</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-alt-col">
                                <div class="box_list wow">
                                    <div class="grid-alt-card row g-0">
                                        <div class="grid-alt-figure col-lg-6">
                                            <figure class="block-reveal">
                                                <div class="block-horizzontal"></div>
                                                <a href="../detalhes/"><img src="../../img/analisaimg/mocoesimg.png" alt="">
                                                    <div class="preview"><span>Detalhes do projeto</span></div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="grid-alt-info col-lg-6">
                                            <div class="wrapper">
                                                <!-- <a href="#0" class="wish_bt"></a> -->
                                                <!-- <div class="price">$39</div> -->
                                                <small>Category</small>
                                                <h3>Persius delenit has cu</h3>
                                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
                                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                                            </div>
                                            <ul class="d-flex justify-content-end">
                                                <!-- <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                                <li><i class="icon_like"></i> 890</li> -->
                                                <li><a href="../detalhes/">+Ver mais</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-alt-col">
                                <div class="box_list wow">
                                    <div class="grid-alt-card row g-0">
                                        <div class="grid-alt-figure col-lg-6">
                                            <figure class="block-reveal">
                                                <div class="block-horizzontal"></div>
                                                <a href="../detalhes/"><img src="../../img/analisaimg/complementimg.png" alt="">
                                                    <div class="preview"><span>Detalhes do projeto</span></div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="grid-alt-info col-lg-6">
                                            <div class="wrapper">
                                                <!-- <a href="#0" class="wish_bt"></a> -->
                                                <!-- <div class="price">$39</div> -->
                                                <small>Category</small>
                                                <h3>Persius delenit has cu</h3>
                                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
                                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                                            </div>
                                            <ul class="d-flex justify-content-end">
                                                <!-- <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                                <li><i class="icon_like"></i> 890</li> -->
                                                <li><a href="../detalhes/">+Ver mais</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-alt-col">
                                <div class="box_list wow">
                                    <div class="grid-alt-card row g-0">
                                        <div class="grid-alt-figure col-lg-6">
                                            <figure class="block-reveal">
                                                <div class="block-horizzontal"></div>
                                                <a href="../detalhes/"><img src="../../img/analisaimg/indicaimg.png" alt="">,
                                                    <div class="preview"><span>Detalhes do projeto</span></div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="grid-alt-info col-lg-6">
                                            <div class="wrapper">
                                                <!-- <a href="#0" class="wish_bt"></a> -->
                                                <!-- <div class="price">$39</div> -->
                                                <small>Category</small>
                                                <h3>Persius delenit has cu</h3>
                                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
                                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                                            </div>
                                            <ul class="d-flex justify-content-end">
                                                <!-- <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                                <li><i class="icon_like"></i> 890</li> -->
                                                <li><a href="../detalhes/">+Ver mais</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-alt-col">
                                <div class="box_list wow">
                                    <div class="grid-alt-card row g-0">
                                        <div class="grid-alt-figure col-lg-6">
                                            <figure class="block-reveal">
                                                <div class="block-horizzontal"></div>
                                                <a href="../detalhes/"><img src="../../img/analisaimg/projresimg.png" alt="">
                                                    <div class="preview"><span>Detalhes do projeto</span></div>
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="grid-alt-info col-lg-6">
                                            <div class="wrapper">
                                                <!-- <a href="#0" class="wish_bt"></a> -->
                                                <!-- <div class="price">$39</div> -->
                                                <small>Category</small>
                                                <h3>Persius delenit has cu</h3>
                                                <p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
                                                <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
                                            </div>
                                            <ul class="d-flex justify-content-end">
                                                <!-- <li><i class="icon_clock_alt"></i> 1h 30min</li>
                                                <li><i class="icon_like"></i> 890</li> -->
                                                <li><a href="../detalhes/">+Ver mais</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /box_list -->
                        <p class="text-center add_top_60"><a href="#0" class="btn_1 rounded">Load more</a></p>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
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