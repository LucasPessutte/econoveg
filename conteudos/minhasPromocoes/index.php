<?php
session_start();
include_once('../../conn/conexao.php');

$is_set = isset($_SESSION['zKFmdhEHixG9Ej']);
$class_col_button_view_product = $is_set ? 'col-10' : 'col-12';

$user_id = isset($_SESSION['zKFmdhEHixG9Ej']);

$sql = "SELECT * 
    FROM products AS p
    WHERE NOT EXISTS (
        SELECT 1
        FROM products_complaints AS pc
        WHERE p.id = pc.product_id
        GROUP BY pc.product_id
        HAVING COUNT(*) >= 3
    ) AND user_id = $user_id;";
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
    <!-- <link href="../../css/vendors.css" rel="stylesheet"> -->
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
            <div class="container-custom margin_60_35">
                <div class="row">
                    <?php  foreach ($res_products as $row) { 
                        $product_pic = "data:image/png;base64," . $row['product_pic'];   
                    ?>
                        <div class="col-4 mb-2">
                            <div class="card card-product" style="width: 100%;">
                                <a href="../../conteudos/detalhes/index.php?id=<?= $row['id'] ?>"><img class="img-product" src="<?= $product_pic ?>" alt=""></a>
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
                                            <button type="button" onclick="editarProduto(<?= $row['id'] ?>)" class="btn btn-primary-econoveg" style="width: 100%;">
                                                Editar produto
                                            </button>
                                        </div>
                                        <?php if($is_set){ ?>
                                            <div class="col-2">
                                                <button class="btn btn-danger-econoveg" type="button">
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

        <div class="modal modal-econoveg fade" id="editarProduto" tabindex="1" aria-labelledby="editarProdutoLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarProdutoLabel">Editar Produto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="../../php/update/products/index.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_edit" id="id_edit">
                        <input type="hidden" name="old_image_edit" id="old_image_edit">
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="input input--filled">
                                            <input class="input_field" type="text" autocomplete="off" name="title_edit" id="title_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Título da Promoção</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <span class="input input--filled">
                                            <input class="input_field" type="text" autocomplete="off" name="description_edit" id="description_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Descrição</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <span class="input input--filled">
                                            <input class="input_field" type="number" step="0.01" autocomplete="off" name="price_edit" id="price_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Preço com Desconto</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <span class="input input--filled">
                                            <input class="input_field" type="number" step="0.01" autocomplete="off" name="old_price_edit" id="old_price_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Preço Antigo</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <span class="input input--filled" id="span_establishment_name">
                                            <input class="input_field" type="text" autocomplete="off" name="establishment_name_edit" id="establishment_name_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Estabelecimento</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <span class="input input--filled" id="span_cep">
                                            <input class="input_field" onchange="handleChangeCep(this.value)" type="text" autocomplete="off" name="cep_edit" id="cep_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">CEP</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-10">
                                        <span class="input input--filled" id="span_street">
                                            <input class="input_field" type="text" autocomplete="off" name="street_edit" id="street_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Logradouro</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-2">
                                        <span class="input input--filled">
                                            <input class="input_field" type="text" autocomplete="off" name="number_edit" id="number_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Número</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <span class="input input--filled" id="span_neighborhood">
                                            <input class="input_field" type="text" autocomplete="off" name="neighborhood_edit" id="neighborhood_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Bairro</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <span class="input input--filled" id="span_city">
                                            <input class="input_field" type="text" autocomplete="off" name="city_edit" id="city_edit" required>
                                            <label class="input_label">
                                                <span class="input__label-content">Cidade</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-4">
                                        <span class="input input--filled">
                                            <select id="state_edit" name="state_edit" class="input_field">
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP" selected>São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                                <option value="EX">Estrangeiro</option>
                                            </select>
                                            <label class="input_label">
                                                <span class="">Estado</span>
                                            </label>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                    <label class="image-upload">
                                    <input type="file" id="product_image_edit" name="product_image_edit" accept="image/*" onchange="displayImage(event)">
                                    <div class="content" id="uploadContent">
                                        <div class="icon">+</div>
                                        <div class="text">Adicionar Imagem</div>
                                    </div>
                                    </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="reset"  style="width: 8rem" class="btn btn-secondary-econoveg" data-bs-dismiss="modal"><strong>Cancelar</strong></button>
                                <button type="submit" style="width: 8rem" class="btn btn-primary-econoveg">Editar</button>
                            </div>
                    </form>
                    </div>
                </div>
            </div>


        <footer>
            <?php include('../../components/footermain.php') ?>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->
     
    <!-- COMMON SCRIPTS -->
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/common_scripts.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../assets/validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
    <script src="../../js/myfunc.js"></script>

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

        function editarProduto(product_id){
            fetch('./functions/getDetailPromotion.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `id=${product_id}`
            })
            .then(response => response.json())
            .then(data => {
                if (!data.error) {
                    $('#id_edit').val(data.id);
                    $('#old_image_edit').val(data.product_pic);
                    $('#title_edit').val(data.title);
                    $('#description_edit').val(data.description);
                    $('#old_price_edit').val(data.old_price);
                    $('#price_edit').val(data.price);
                    $('#establishment_name_edit').val(data.establishment_name);
                    $('#cep_edit').val(data.cep);
                    $('#street_edit').val(data.street);
                    $('#number_edit').val(data.number);
                    $('#neighborhood_edit').val(data.neighborhood);
                    $('#city_edit').val(data.city);
                    $('#state_edit').val(data.state);

                    const content = document.getElementById('uploadContent');
                    const img = document.createElement('img');

                    img.src = "data:image/png;base64," + data.product_pic;

                    content.innerHTML = '';
                    content.appendChild(img);

                    $('#editarProduto').modal('show');
                } else {
                    console.log(data.error)
                }
            })
            .catch(error => console.error('Erro:', error));
        }
    </script>

</body>

</html>