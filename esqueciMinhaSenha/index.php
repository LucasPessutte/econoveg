<?php
session_start();

$n = 0;
if (isset($_SESSION['zKFmdhEHixG9Ej'])) {
    exit(header('Location: ../'));
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Esqueci minha senha</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/vendors.css" rel="stylesheet">
    <link href="../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

</head>

<body id="login_bg">

    <nav id="menu" class="fake_menu"></nav>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <div id="login">
        <aside>
            <figure>
                <a href="../"><img src="../img/logo.png" width="149" height="42" alt=""></a>
            </figure>
            <form action="../php/utils/send_link_password.php" method="GET" autocomplete="off">
                <input type="hidden" name="esq" value="1">
                <div style="margin-top: 20vh;" class="form-group">
                    <h4 class="color-blue">Esqueci minha senha</h4>
                    <hr>
                    <span class="input">
                        <input class="input_field" type="email" autocomplete="off" name="email" id="email" required>
                        <label class="input_label">
                            <span class="input__label-content">Insira seu email para recuperar senha</span>
                        </label>
                    </span>
                </div>
                <button type="submit" class="btn_1 rounded full-width">Enviar</button>
                <div class="text-center add_top_10">Realize seu <strong><a href="../login/">Login</a></strong></div>
            </form>
            <div class="copy">© 2022 AnalisaItapê</div>
        </aside>
    </div>
    <?php
    if (isset($_SESSION['msg'])) {
        $n = 1;
    ?>
        <div id="snackbar">
            <?php
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            ?>
        </div>
    <?php }  ?>
    <!-- /login -->

    <!-- COMMON SCRIPTS -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/common_scripts.js"></script>
    <script src="../js/main.js"></script>
    <script src="../assets/validate.js"></script>
    <script src="../js/myfunc.js"></script>

    <script>
        var t = parseInt(<?php echo $n; ?>);
        if (t > 0) {
            getToast();
        }
    </script>
</body>

</html>