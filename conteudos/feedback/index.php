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
    <title>AnalisaItapê | Feedback</title>

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

    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="../../css/blog.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">

</head>

<body>

    <div id="page">

        <header class="header menu_2">
            <?php include('../../components/header.php') ?>
        </header>
        <!-- /header -->

        <main>
            <section id="hero_in" class="feedbacks">
                <div class="wrapper">
                    <div class="container">
                        <h1 class="fadeInUp"><span></span>Feedback</h1>
                    </div>
                </div>
            </section>
            <!--/hero_in-->

            <div class="container margin_60_35">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Feedback</h2>
                    <p class="subtitle-grey">compartilhe conosco</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bloglist singlepost">
                            <div class="container">
                                <h1><i class="fas fa-comment-dots"></i> Comente o que houve</h1>
                                <p>Encontrou algum bug? Tem alguma ideia ou sugestão? A área de Feedback é exclusivamente voltada para você e sua opinião. Contamos com sua colaboração. Para enviar basta prencheer o formulário com seu comentário e encaminhar!
                                    Se quiser obter uma réplica informe o seu email. 😉</p>
                                <form action="../../php/post/feedback/" id="form-feedback" method="POST" enctype="multipart/form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="input">
                                                <input class="input_field" type="email" id="email_feedback" name="email_feedback">
                                                <label class="input_label"><span class="input__label-content">Email (opcional)</span></label>
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="input">
                                                <input class="input_field" type="text" id="titulo_feedback" name="titulo_feedback">
                                                <label class="input_label"><span class="input__label-content">Título (opcional)</span></label>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <span class="input">
                                        <textarea class="input_field" id="comentario_feedback" name="comentario_feedback" style="height:150px;" required></textarea>
                                        <label class="input_label"><span class="input__label-content">Seu comentário</span></label>
                                    </span>

                                    <div class="div-btn-feedback">
                                        <button type="button" id="btn-submit" onclick="submit_feedback()" class="btn_1 rounded">Encaminhar Feedback</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /single-post -->
                    </div>
                    <!-- /col -->
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

    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/common_scripts.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../assets/validate.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function submit_feedback() {
            var validacaoForm = $('#form-feedback')[0].reportValidity();
            if (validacaoForm) {
                $('#btn-submit').attr('disabled', true);
                // $('#form-feedback').submit();

                var email = $('#email_feedback').val();
                var titulo = $('#titulo_feedback').val();
                var comentario = $('#comentario_feedback').val();

                var formData = new FormData();
                formData.append('email', email);
                formData.append('titulo', titulo);
                formData.append('comentario', comentario);

                console.log(formData)
                axios.post("../../php/post/feedbacks/", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                }).then((res) => {
                    console.log("aa")
                    Swal.fire({
                        position: 'mid-center',
                        icon: 'success',
                        title: 'Feedback encaminhado com sucesso!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        if (result.dismiss) {
                            window.location.reload();
                        }
                    });
                }).catch((err) => {
                    Swal.fire({
                        position: 'mid-center',
                        icon: 'warning',
                        title: 'Houve algum problema interno, verifique sua solicitação e tente novamente.',
                        showConfirmButton: false,
                        timer: 2500
                    });
                });

            }

        }
    </script>
</body>

</body>

</html>