<?php
session_start();
include_once('../../conn/conexao.php');

$sql = "SELECT 
            a.*,
            p.name AS partner
        FROM articles AS a
        INNER JOIN administrators AS p ON
            a.partner_id = p.id
        WHERE 
            a.status = 1";
$res_articles = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Artigos</title>

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

    <div id="page" class="theia-exception">
        <header class="header menu_2">
            <?php include('../../components/header.php') ?>
        </header>
        <!-- /header -->

        <main>
            <section id="hero_in" class="general">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Artigos</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <?php
                        if (mysqli_num_rows($res_articles) == 0) {
                        ?>
                            <h3 style="color:#9d9d9dcf">Sem artigos na plataforma</h3>
                        <?php
                        }

                        foreach ($res_articles as $row) {
                            $img_src = $row['img'] != "" && $row['img'] ? "data:image/png;base64," . $row['img'] : "http://via.placeholder.com/800x533/ccc/fff/blog-1.jpg";

                        ?>
                            <article class="blog wow fadeIn">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <figure>
                                            <a href="../artigo/">
                                                <img class="img-post" src="<?= $img_src ?>" alt="">
                                                <div class="preview"><span>Ler mais</span></div>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="post_info">
                                            <small><?= date('d/m/Y', strtotime($row['create_date'])) ?></small>
                                            <h3><a href="../artigo/"><?= $row['title'] ?></a></h3>
                                            <p><?= $row['description'] ?></p>
                                            <ul>
                                                <li>
                                                    <div class="thumb"><img src="../../img/analisaimg/analisafundoazul80x80.png" alt=""></div> <?= $row['partner'] ?>
                                                </li>
                                                <li><i class="icon_comment_alt"></i> 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php } ?>
                        <!-- /article -->

                        <!-- <nav aria-label="...">
                            <ul class="pagination pagination-sm">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> -->
                        <!-- /pagination -->
                    </div>
                    <!-- /col -->

                    <!-- <aside class="col-lg-3">
                        <div class="widget">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar...">
                                </div>
                                <button type="submit" id="submit" class="btn_1 rounded"> Search</button>
                            </form>
                        </div>
                    </aside> -->
                    <!-- /aside -->
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

</html>