<?php
if (isset($_SESSION['zKFmdhEHixG9Ej'])) {
    $user_id = $_SESSION['zKFmdhEHixG9Ej'];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $res = mysqli_query($conn, $sql);
    foreach ($res as $row) {
        // if ($row['profile_pic'] != "") {
        //     $profile_pic = "data:image/png;base64," . $row['profile_pic'];
        // } else {
        //     $profile_pic = "../../img/profiledefault.png";
        // }
        $name = $row['name'];
    }
    
    $style_mainmenu = "style='top: 5px !important'";
} else {
    $profile_pic = "";
    $style_mainmenu = "";
}

?>
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
            <a href="../../conteudos/perfil/">
                <img src="<?= $profile_pic ?>" class="img-profile-nav">
            </a>
        </li>
    <?php } else { ?>
        <li>
            <a href="../../login/" class="login"> &nbsp; </a>
        </li>
        <li class="hidden_tablet"><button type="button" class="btn btn-primary-econoveg">Criar Promoção</button></li>
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