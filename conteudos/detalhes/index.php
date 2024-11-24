<?php
session_start();
include_once('../../conn/conexao.php');

$id_product = $_GET['id'];

$sql = "
    SELECT 
        p.*,
        u.name AS user_name
    FROM 
    products AS p
    INNER JOIN users AS u ON u.id = p.user_id 
    WHERE p.id = $id_product";
$res_product = mysqli_query($conn, $sql);

foreach($res_product as $row_product){
    $user_name = $row_product['user_name'];
    $title = $row_product['title'];
    $description = $row_product['description'];
    $establishment_name = $row_product['establishment_name'];
    $street = $row_product['street'];
    $neighborhood = $row_product['neighborhood'];
    $number = $row_product['number'];
    $city = $row_product['city'];
    $state = $row_product['state'];
    $cep = $row_product['cep'];
    $price = $row_product['price'];
    $old_price = $row_product['old_price'];
    $product_pic = "data:image/png;base64," . $row_product['product_pic'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>EconoVeg | Detalhes</title>

    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">

    <!-- Favicons-->
    <link rel="shortcut icon" href="../../img/folha.png" type="image/x-icon">
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

        <main class="conteudo">
            <div class="bg_color_1">
                <div class="container margin_60_35">
                    <div class="row">
                        <div class="col-lg-8">

                            <section id="description">
                                <h2><?= $title ?></h2>
                                <p><?= $description ?></p>
                                <ul class="list_ok">
                                    <li style="display: flex; flex-direction: row;">
                                        <div style="margin-right: 1rem;">
                                            <i class="icon-home-4 i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Estabelecimento</h6>
                                            <p><?= $establishment_name ?></p>
                                        </div>
                                    </li>
                                    <li style="display: flex; flex-direction: row;">
                                        <div style="margin-right: 1rem;">
                                            <i class="icon-location i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Endereço</h6>
                                            <p><?= $street ?>, <?= $number ?>, <?= $neighborhood ?>, <?= $city ?> - <?= $state ?></p>
                                        </div>
                                    </li>
                                    <li style="display: flex; flex-direction: row;">
                                        <div style="margin-right: 1rem;">
                                            <i class="pe-7s-user i-detalhes"></i>
                                        </div>
                                        <div class="div-detalhes-info">
                                            <h6>Autor</h6>
                                            <p><?= $user_name ?></p>
                                        </div>
                                    </li>

                                </ul>
                            </section>
                            <!-- /section -->
                        </div>
                        <!-- /col -->

                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail">
                                <img src="<?= $product_pic ?>" alt="" class="img-product">
                                <div class="row">
                                    <div class="col-12">
                                        <span style="font-size: 1.0rem;">Preço</span>
                                    </div>
                                    <div class="col-4">
                                        <span class="price-econoveg">R$<?= $price ?></span>
                                    </div>
                                    <div class="col-2" style="align-content: center;">
                                        <span class="old-price">R$<?= $old_price ?></span>
                                    </div>
                                </div>
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