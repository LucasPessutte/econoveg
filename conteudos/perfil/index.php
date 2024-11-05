<?php
session_start();
include_once('../../conn/conexao.php');

$name = "Não logado";
$password = "";

if (isset($_SESSION['zKFmdhEHixG9Ej'])) {
    $user_id = $_SESSION['zKFmdhEHixG9Ej'];

    $sql = "SELECT * FROM users WHERE id = $user_id";
    $res = mysqli_query($conn, $sql);
    foreach ($res as $row) {
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        // $document_type = $row['document_type'];
        // $document = $row['document'];
        $create_date = date('d/m/Y', strtotime($row['create_date']));
        $update_date = $row['update_date'] ? date('d/m/Y', strtotime($row['update_date'])) : "Nunca alterado";
        $profile_pic = "../../img/profiledefault.png";
    }
} else {
    $profile_pic = "";
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
    <title>AnalisaItapê | Perfil</title>

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

    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">

    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


</head>

<body>

    <div id="page" class="theia-exception">

        <header class="header menu_2">
            <?php include('../../components/header.php') ?>
        </header>
        <!-- /header -->

        <main>
            <section id="hero_in" class="profilepage">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Perfil</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->
            <div class="container margin_60_35">
                <div class="row">
                    <aside class="col-lg-3" id="sidebar">
                        <div class="profile">
                            <div class="d-flex justify-content-center mb-1 fs-20px">
                                <a href="../../php/auth/logout.php">
                                    <i class="fas fa-sign-out-alt me-2"></i>Logout
                                </a>
                            </div>
                            <form action="../../php/update/users/change_profile_pic.php" method="POST" enctype="multipart/form-data" id="form-profile-picture">
                                <input type="file" class="hide" id="profile_picture" name="profile_picture" onchange="show_picture(this, 'profile_picture_view', 'form')" accept=".png,.jpg,.jpeg">
                            </form>
                            <div onclick="selecionar_img_cadastro()">
                                <figure class="img-profile d-flex rounded-circle">
                                    <img width="150" height="150" id="profile_picture_view" src="<?= $profile_pic != "" ? $profile_pic : "../../img/flex_slides/150x150.jpg" ?>" alt="Profile" class="rounded-circle">
                                    <div class="rounded-circle profile-content">
                                        <i class="fas fa-camera"></i>
                                        <label>Alterar</label>
                                    </div>
                                </figure>
                            </div>

                            <div id="div-submit-profile" class="d-flex justify-content-center hide">
                                <button type="button" onclick="alterar_img_perfil()" class="btn_1 rounded"><i class="fas fa-check me-2"></i>Alterar Foto</a></button>
                            </div>

                            <ul class="social_teacher">
                                <!-- <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-email"></i></a></li> -->
                            </ul>
                            <ul>
                                <li>Nome: <span class="float-right"><?= $name ?></span> </li>
                                <li>Avaliações: <span class="float-right">42</span></li>
                            </ul>
                        </div>
                    </aside>
                    <!--/aside -->

                    <div class="col-lg-9">
                        <div class="box_teacher">
                            <div class="indent_title_in">
                                <i class="pe-7s-user"></i>
                                <h3 class="d-flex align-items-center">Perfil <a onclick="toggleEditProfile(true)" class="btn btn-blue-secondary c-pointer p-0 ph-8px ms-2">Editar</a></h3>
                                <p>Verifique e altere suas informações.</p>
                            </div>
                            <?php if (isset($_SESSION['zKFmdhEHixG9Ej'])) { ?>
                                <div class="wrapper_indent">
                                    <h5>Informações Pessoais</h5>
                                    <div id="info_profile" class="row">
                                        <div class="col-md-6">
                                            <ul class="list_3">
                                                <li class="d-flex">
                                                    <div class="me-2">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                    <div>
                                                        <b>Nome</b>
                                                        <p><?= $name ?></p>
                                                    </div>
                                                </li>
                                                <li class="d-flex">
                                                    <div class="me-2">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <div>
                                                        <b>Email</b>
                                                        <p><?= $email ?><i onclick="editEmail()" class="far fa-edit ms-2 color-blue c-pointer"></i></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list_3">
                                                <li class="d-flex">
                                                    <div class="me-2">
                                                        <i class="fas fa-user-edit"></i>
                                                    </div>
                                                    <div>
                                                        <b>Alterações de Usuário</b>
                                                        <p>
                                                            Criação: <?= $create_date ?>
                                                            <br>
                                                            Ultima Alteração: <?= $update_date ?>
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="d-flex">
                                                    <button type="button" onclick="redefinir_senha()" class="btn_1 rounded"><i class="fas fa-lock me-2"></i>Alterar Senha</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <form id="form-update-profile" action="../../php/update/users/" method="POST" enctype="multipart/form">
                                        <div id="update_profile" class="row hide">
                                            <div class="col-md-6 mt-2">
                                                <ul class="list_3">
                                                    <li class="d-flex">
                                                        <div class="me-2">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <div>
                                                            <b>Nome</b>
                                                            <input type="text" class="form-control" placeholder="Nome" name="name_profile" id="name_profile" value="<?= $name ?>">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6 mt-2">
                                                <ul class="list_3">
                                                    <li class="d-flex">
                                                        <div class="me-2">
                                                            <i class="fas fa-birthday-cake"></i>
                                                        </div>
                                                        <div>
                                                            <b>Data de Nascimento</b>
                                                            <input type="date" onkeyup="verificar_data_nasc(this.value)" class="form-control" name="birth_date_profile" id="birth_date_profile" value="<?= $birth_date_input ?>">
                                                            <div id="div_error" class="span-error-form text-warning fs-10px fw-600 hide">
                                                                <i class='fas fa-exclamation-circle me-1'></i>
                                                                <span id="msg_error"></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="d-flex justify-content-center pr-10r mt-4">
                                                <a onclick="toggleEditProfile(false)" class="btn_1 btn-blue-secondary c-pointer ms-2">Cancelar</a>
                                                <button type="button" onclick="submit_form()" id="btn-submit" class="btn_1 c-pointer ms-2">Salvar</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End row-->
                                </div>
                            <?php } ?>
                            <!--wrapper_indent -->
                            <!-- <hr class="styled_2">
                            <div class="indent_title_in">
                                <i class="pe-7s-display1"></i>
                                <h3>Minhas Avaliações</h3>
                                <p>Verifique e altere suas avaliações.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Aqui estão as avaliações que você realizou, em ordenação por mais recentes.</p>
                                <div class="table-responsive">
                                    <table class="table table-striped add_bottom_30">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Course name</th>
                                                <th>Rate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Business Plan</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star voted"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Economy pinciples</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Understand diagrams</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Marketing strategies</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Marketing</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star voted"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Business Plan</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Economy pinciples</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="../detalhes/">Understand diagrams</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                            <!--wrapper_indent -->
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!--/main-->

        <footer>
            <?php include('../../components/footer.php'); ?>
        </footer>
        <!--/footer-->
    </div>
    <!-- page -->

    <!-- COMMON SCRIPTS -->
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/common_scripts.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/myfunc.js"></script>
    <script src="../../js/perfil.js"></script>
    <script src="../../assets/validate.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function redefinir_senha() {
            Swal.fire({
                title: "Deseja redefinir sua senha?",
                text: "Iremos te enviar uma solicitação pelo e-mail",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#1CB4D5",
                cancelButtonColor: "#c3c3c3",
                confirmButtonText: "Enviar",
            }).then((result) => {
                if (result.isConfirmed) {
                    $.get('../../php/utils/send_link_password.php?email=' + '<?= $email ?>', (data) => {
                        if (data == "OK") {
                            Swal.fire({
                                position: "center-middle",
                                icon: "success",
                                text: "Sua solicitação para alterar a senha foi enviada!",
                                showConfirmButton: true,
                                confirmButtonColor: "#1CB4D5",
                            });
                        } else {
                            Swal.fire({
                                position: "center-middle",
                                icon: "error",
                                text: "Sua solicitação para alterar a senha não conseguiu ser enviada!",
                                showConfirmButton: true,
                                confirmButtonColor: "#1CB4D5",
                            });
                        }
                    })
                }
            });
        }

        async function editEmail() {
            const {
                value: password
            } = await Swal.fire({
                title: "Deseja redefinir seu e-mail?",
                text: "Será necessário digitar sua senha",
                icon: "info",
                showCancelButton: true,
                confirmButtonColor: "#1CB4D5",
                cancelButtonColor: "#c3c3c3",
                confirmButtonText: "Enviar",
                input: 'password',
                inputPlaceholder: 'Digite sua senha',
                inputAttributes: {
                    maxlength: 10,
                    autocapitalize: 'off',
                    autocorrect: 'off'
                }
            });

            if (password) {
                const passwordSession = '<?= $password ?>';
                console.log(password);
                console.log(passwordSession);
                if (password == passwordSession) {
                    const token = sha256(Math.random() * (15 - 5) + 5);
                    $.get('../../php/utils/set_tkn_email.php?email=' + '<?= $email ?>' + '&token=' +
                        token, (data) => {
                            if (data == "OK") {
                                // redirect para alterar email
                                window.location.href = "../../novoEmail?token=" + token;
                            } else {
                                Swal.fire({
                                    position: "center-middle",
                                    icon: "error",
                                    text: "Não é possível realizar a alteração",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        });
                } else {
                    Swal.fire({
                        position: "center-middle",
                        icon: "error",
                        text: "Senha incorreta",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            }
        }
    </script>
</body>

</html>