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
    <title>AnalisaItapê | Vereador</title>

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
                        <h1 class="fadeInUp"><span></span>Vereador</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->
            <div class="container margin_60_35">
                <div class="row">
                    <aside class="col-lg-3" id="sidebar">
                        <div class="profile">
                            <figure><img src="http://via.placeholder.com/150x150/ccc/fff/teacher_2_small.jpg" alt="Teacher" class="rounded-circle"></figure>
                            <ul>
                                <li><b>Nome:</b> Leonardo Corrêa Ayres Branco </li>
                                <li><b>Partido:</b> MDB</li>
                                <li><b>Mandato Atual:</b> 2020-2024</li>
                                <li>Courses <span class="float-right">15</span></li>
                            </ul>
                        </div>
                    </aside>
                    <!--/aside -->

                    <div class="col-lg-9">
                        <div class="box_teacher">
                            <div class="indent_title_in">
                                <i class="pe-7s-user"></i>
                                <h3>Profile</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Lorem ipsum dolor sit amet, dicta oportere ad est, ea eos partem neglegentur theophrastus. Esse voluptatum duo ne, expetenda corrumpit no per, at mei nobis lucilius. No eos semper aperiri neglegentur, vis noluisse quaestio no. Vix an nostro inimicus, qui ut animal fabellas reprehendunt. In quando repudiare intellegebat sed, nam suas dicta melius ea.</p>
                                <p>Mei ut decore accusam consequat, alii dignissim no usu. Phaedrum intellegat sit ut, no pri mutat eirmod. In eum iriure perpetua adolescens, pri dicunt prodesset et. Vis dicta postulant ad.</p>
                                <h5>Credentials</h5>
                                <p>Lorem ipsum dolor sit amet, dicta oportere ad est, ea eos partem neglegentur theophrastus. Esse voluptatum duo ne, expetenda corrumpit no per, at mei nobis lucilius. No eos semper aperiri neglegentur, vis noluisse quaestio no. Vix an nostro inimicus, qui ut animal fabellas reprehendunt. In quando repudiare intellegebat sed, nam suas dicta melius ea.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="list_3">
                                            <li><strong>September 2009 - Bachelor Degree in Economics</strong>
                                                <p>University of Cambrige - United Kingdom</p>
                                            </li>
                                            <li><strong>December 2012 - Master course in Economics</strong>
                                                <p>University of Cambrige - United Kingdom</p>
                                            </li>
                                            <li><strong>October 2013 - Master's Degree in Statistic</strong>
                                                <p>University of Oxford - United Kingdom</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list_3">
                                            <li><strong>September 2009 - Bachelor Degree in Economics</strong>
                                                <p>University of Cambrige - United Kingdom</p>
                                            </li>
                                            <li><strong>December 2012 - Master course in Economics</strong>
                                                <p>University of Cambrige - United Kingdom</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End row-->
                            </div>
                            <!--wrapper_indent -->
                            <hr class="styled_2">
                            <div class="indent_title_in">
                                <i class="pe-7s-display1"></i>
                                <h3>My courses</h3>
                                <p>Mussum ipsum cacilds, vidis litro abertis.</p>
                            </div>
                            <div class="wrapper_indent">
                                <p>Mei ut decore accusam consequat, alii dignissim no usu. Phaedrum intellegat sit ut, no pri mutat eirmod. In eum iriure perpetua adolescens, pri dicunt prodesset et. Vis dicta postulant ad.</p>
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
                                                <td><a href="#">Business Plan</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star voted"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="#">Economy pinciples</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="#">Understand diagrams</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="#">Marketing strategies</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="#">Marketing</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star voted"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="#">Business Plan</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="#">Economy pinciples</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                            <tr>
                                                <td>Business</td>
                                                <td><a href="#">Understand diagrams</a></td>
                                                <td class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i> <i class="icon-star"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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