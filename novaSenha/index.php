<?php
include_once('../conn/conexao.php');
if (isset($_GET['tkn'])) {
    $token = $_GET['tkn'];

    $sql = "SELECT * FROM users WHERE token = '$token'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) == 0) {
        exit(header('Location: ../'));
    }
} else {
    exit(header('Location: ../'));
}

?>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Nova senha</title>

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
    <!-- <link href="../css/solicitacoes.css" rel="stylesheet"> -->

    <link href="../css/wizard.css" rel="stylesheet">

</head>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="margin-top: 26vh!important">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">
                            <div class="col-lg-8 p-3">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Alteração de senha</h1>
                                    </div>
                                    <hr>
                                    <form class="user d-flex align-center justify-content-center" style="flex-flow:column" action="../php/update/users/change_password.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" id="tkn" name="tkn" value="<?= $token ?>">
                                        <span class="input">
                                            <input class="input_field" type="password" autocomplete="off" name="new_password" id="new_password" required>
                                            <!-- <i onclick="eye_toggle(this)" class="far fa-eye-slash fa-2x eye-password"></i> -->
                                            <label class="input_label">
                                                <span class="input__label-content">Digite sua senha</span>
                                            </label>
                                            <!-- <input id="check-toggle" type="checkbox" class="hide" value="0"> -->
                                        </span>

                                        <span class="input">
                                            <input class="input_field" type="password" autocomplete="off" name="new_password_ok" id="new_password_ok" required>
                                            <!-- <i onclick="eye_toggle(this)" class="far fa-eye-slash fa-2x eye-password"></i> -->
                                            <label class="input_label">
                                                <span class="input__label-content">Digite novamente sua senha</span>
                                            </label>
                                            <!-- <input id="check-toggle" type="checkbox" class="hide" value="0"> -->
                                        </span>

                                        <button type="submit" class="btn_1 w-50 m-auto mt-5">
                                            Concluir
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/common_scripts.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/myfunc.js"></script>
    <script src="../assets/validate.js"></script>
</body>

</html>