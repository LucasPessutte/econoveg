<?php
if (isset($_SESSION['zKFmdhEHixG9Ej'])) {
    $user_id = $_SESSION['zKFmdhEHixG9Ej'];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $res = mysqli_query($conn, $sql);
    foreach ($res as $row) {

        $profile_pic = "../../img/profiledefault.png";
        $name = $row['name'];
    }
    
    $style_mainmenu = "style='top: 5px !important'";
} else {
    $profile_pic = "";
    $style_mainmenu = "";
}

?>

<style>
  .image-upload {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 2px dashed #ccc;
    border-radius: 8px;
    width: 100%;
    height: 200px;
    cursor: pointer;
    position: relative;
    font-family: Arial, sans-serif;
  }

  .image-upload input[type="file"] {
    display: none;
  }

  .image-upload .icon {
    font-size: 24px;
    color: #aaa;
  }

  .image-upload .text {
    color: #888;
    font-size: 16px;
    margin-top: 8px;
  }

  .image-upload .content {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .image-upload:hover {
    border-color: #888;
  }

  .image-upload img {
    width: 100%;
    height: 100%;
    object-fit: contain; 
    position: absolute;
    top: 0;
    left: 0;
  }
</style>
<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<div id="logo">
    <a href="../../"><img src="../../img/econoveg_logo.png" width="149" height="42" alt=""></a>
</div>
<ul id="top_menu">
    <li><a href="#0" class="search-overlay-menu-btn">Search</a></li>

    <?php if (isset($_SESSION['zKFmdhEHixG9Ej'])) { ?>
        <li>
            <a href="../perfil/">
                <img src="<?= $profile_pic ?>" class="img-profile-nav">
            </a>
        </li>
        <li class="hidden_tablet"><button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary-econoveg">Criar Promoção</button></li>
    <?php } else { ?>
        <li>
            <a href="../../login/" class="login"> &nbsp; </a>
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
                <a class="text-header" href="../../">Ínicio</a>
            </span>
        </li>
        <?php if (isset($_SESSION['zKFmdhEHixG9Ej'])) { ?>
            <li>
                <span>
                    <a class="text-header" href="./conteudos/projetos/">Minhas Promoções</a>
                </span>
            </li>
        <?php } ?>
        <?php if (isset($_SESSION['zKFmdhEHixG9Ej'])) { ?>
            <li>
                <span>
                    <a class="text-header" href="./conteudos/artigos/">Denuncías</a>
                </span>
            </li>
        <?php } ?>
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

<div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Criar Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./php/post/products/index.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <span class="input">
                            <input class="input_field" type="text" autocomplete="off" name="title" id="title" required>
                            <label class="input_label">
                                <span class="input__label-content">Título da Promoção</span>
                            </label>
                        </span>
                    </div>
                    <div class="col-12">
                        <span class="input">
                            <input class="input_field" type="text" autocomplete="off" name="description" id="description" required>
                            <label class="input_label">
                                <span class="input__label-content">Descrição</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <span class="input">
                            <input class="input_field" type="number" step="0.01" autocomplete="off" name="price" id="price" required>
                            <label class="input_label">
                                <span class="input__label-content">Preço com Desconto</span>
                            </label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="input">
                            <input class="input_field" type="number" step="0.01" autocomplete="off" name="old_price" id="old_price" required>
                            <label class="input_label">
                                <span class="input__label-content">Preço Antigo</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <span class="input" id="span_establishment_name">
                            <input class="input_field" type="text" autocomplete="off" name="establishment_name" id="establishment_name" required>
                            <label class="input_label">
                                <span class="input__label-content">Estabelecimento</span>
                            </label>
                        </span>
                    </div>
                    <div class="col-6">
                        <span class="input" id="span_cep">
                            <input class="input_field" onchange="handleChangeCep(this.value)" type="text" autocomplete="off" name="cep" id="cep" required>
                            <label class="input_label">
                                <span class="input__label-content">CEP</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <span class="input" id="span_street">
                            <input class="input_field" type="text" autocomplete="off" name="street" id="street" required>
                            <label class="input_label">
                                <span class="input__label-content">Logradouro</span>
                            </label>
                        </span>
                    </div>
                    <div class="col-2">
                        <span class="input">
                            <input class="input_field" type="text" autocomplete="off" name="number" id="number" required>
                            <label class="input_label">
                                <span class="input__label-content">Número</span>
                            </label>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <span class="input" id="span_neighborhood">
                            <input class="input_field" type="text" autocomplete="off" name="neighborhood" id="neighborhood" required>
                            <label class="input_label">
                                <span class="input__label-content">Bairro</span>
                            </label>
                        </span>
                    </div>
                    <div class="col-4">
                        <span class="input" id="span_city">
                            <input class="input_field" type="text" autocomplete="off" name="city" id="city" required>
                            <label class="input_label">
                                <span class="input__label-content">Cidade</span>
                            </label>
                        </span>
                    </div>
                    <div class="col-4">
                        <span class="input">
                            <select id="state" name="state" class="input_field">
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
                    <input type="file" id="product_image" name="product_image" accept="image/*" onchange="displayImage(event)">
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
                <button type="submit" style="width: 8rem" class="btn btn-primary-econoveg">Criar</button>
            </div>
    </form>
    </div>
  </div>
</div>