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
    <title>AnalisaItapê | Artigo</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/vendors.css" rel="stylesheet">
    <link href="../../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="../../css/blog.css" rel="stylesheet">

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
            <section id="hero_in" class="general">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Artigo</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bloglist singlepost">
                            <p>
                                <img class="img-fluid w-100" src="http://via.placeholder.com/900x450/ccc/fff/blog-single.jpg">
                            </p>
                            <h1>Your blog article title</h1>
                            <div class="postmeta">
                                <ul>
                                    <li><a><i class="icon_folder-alt"></i> Artigos AnalisaItapê</a></li>
                                    <li><a><i class="icon_clock_alt"></i> 23/12/2015</a></li>
                                    <li><a><i class="icon_pencil-edit"></i> Equipe AnalisaItapê</a></li>
                                </ul>
                            </div>
                            <!-- /post meta -->
                            <div class="post-content">
                                <div class="dropcaps">
                                    <p>Aorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it
                                        to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>

                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                    College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                                    Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            </div>
                            <!-- /post -->
                        </div>
                        <!-- /single-post -->
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

    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/common_scripts.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/myfunc.js"></script>

</body>

</html>