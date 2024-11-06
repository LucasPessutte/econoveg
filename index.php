<?php
session_start();
include_once('./conn/conexao.php');

$is_set = isset($_SESSION['zKFmdhEHixG9Ej']);
$class_col_button_view_product = $is_set ? 'col-10' : 'col-12';

$sql = "SELECT * 
    FROM products AS p
    WHERE NOT EXISTS (
        SELECT 1
        FROM products_complaints AS pc
        WHERE p.id = pc.product_id
        GROUP BY pc.product_id
        HAVING COUNT(*) >= 3
    );";
$res_products = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>EconoVeg | Produtos</title>

    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">

    <!-- Favicons-->
    <link rel="shortcut icon" href="./img/folha.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="./img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="./img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="./img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="./img/apple-touch-icon-144x144-precomposed.png">

    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <!-- <link href="./css/vendors.css" rel="stylesheet"> -->
    <link href="./css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="./css/skins/square/grey.css" rel="stylesheet">
    <link href="./css/skins/square/blue.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="./css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page" class="theia-exception">
        <header class="header menu_2">
            <?php include('./components/headermain.php') ?>
        </header>
        <!-- /header -->

        <main class="conteudo">
            <div class="container-custom margin_60_35">
                <div class="row">
                    <?php  foreach ($res_products as $row) { 
                        $product_pic = "data:image/png;base64," . $row['product_pic'];   
                    ?>
                        <div class="col-4 mb-2">
                            <div class="card card-product" style="width: 100%;">
                                <a href="./conteudos/detalhes/index.php?id=<?= $row['id'] ?>"><img class="img-product" src="<?= $product_pic ?>" alt=""></a>
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <span class="text-small"><?= $row['establishment_name'] ?></span>
                                        </div>
                                        <div class="col-12 column-title">
                                            <span class="product-title"><?= $row['title'] ?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12"><span class="text-new-price mb-1">R$ <?= $row['price'] ?></span></div>
                                        <div class="<?= $class_col_button_view_product ?>">
                                            <a href="./conteudos/detalhes/index.php?id=<?= $row['id'] ?>" class="btn btn-primary-econoveg" style="width: 100%;">
                                                Visualizar produto
                                            </a>
                                        </div>
                                        <?php if($is_set){ ?>
                                            <div class="col-2">
                                                <button class="btn btn-report" type="button">
                                                    <i class="icon-megaphone"></i>
                                                </button>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- /container -->
        </main>
        <!--/main-->

        <footer>
            <?php include('./components/footermain.php') ?>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->
     
    <!-- COMMON SCRIPTS -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/common_scripts.js"></script>
    <script src="./js/main.js"></script>
    <script src="./assets/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
    <script src="./js/myfunc.js"></script>

    <script>
        $(document).ready(() => {
            $('#cep').mask('00000-000');
        })

        async function handleChangeCep(cep){
            const response = await get_address_by_cep(cep);

            if(!!response.status){
                $('#street').val(response.data.logradouro);
                $('#neighborhood').val(response.data.bairro);
                $('#city').val(response.data.localidade);
                $('#state').val(response.data.uf);

                $('#span_street').addClass('input--filled');
                $('#span_neighborhood').addClass('input--filled');
                $('#span_city').addClass('input--filled');
                $('#span_state').addClass('input--filled')
            }
        }

        function displayImage(event) {
            const input = event.target;
            const content = document.getElementById('uploadContent');

            if (input.files && input.files[0]) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(input.files[0]);
                
                content.innerHTML = '';
                content.appendChild(img);
            }
        }
    </script>

</body>

</html>