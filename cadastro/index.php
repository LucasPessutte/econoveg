<?php
session_start();

$n = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>AnalisaItapê | Cadastro</title>

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

    <!-- SPECIFIC CSS -->
    <link href="../css/skins/square/grey.css" rel="stylesheet">
    <link href="../css/skins/square/blue.css" rel="stylesheet">
    <link href="../css/wizard.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">


</head>

<body id="admission_bg">

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->
    <input id="check-toggle" name="check-toggle" type="checkbox" class="hide" value="0">
    

    <div id="form_container" class="clearfix">
        <figure>
            <a href="../"><img src="../img/logo.png" width="149" height="42" alt=""></a>
        </figure>
        <div id="wizard_container">
            <div id="top-wizard">
                <div id="progressbar"></div>
            </div>
            <!-- /top-wizard -->
            <form id="form-register" method="POST" action="./../php/post/users/" autocomplete="off" enctype="multipart/form-data">
                <input id="website" name="website" type="text" value="">
                <!-- Leave for security protection, read docs for details -->
                <div id="middle-wizard">
                    <div class="step">
                        <input type="hidden" class="num_etapa" value="-1">
                        <div id="intro">
                            <figure>
                                <img src="../img/wizard_intro_icon.svg" alt="">
                            </figure>
                            <h1>Formulário de Cadastro</h1>
                            <p>Você deseja avaliar e comentar nos projetos exibidos? Essa funcionalidade é exclusiva dos usuários AnalisaItapê. </p>
                            <p><strong>Se quiser usufruir dessa funcionalidade faça já seu cadastro!</strong></p>
                        </div>
                    </div>

                    <div class="step">
                        <input type="hidden" class="num_etapa" value="1">
                        <h3 class="main_question text-center"><strong>1/3</strong>Preencha com seus dados</h3>
                        <input type="file" class="hide" id="profile_picture" name="profile_picture" onchange="show_picture(this, 'profile_picture_view')" accept=".png,.jpg,.jpeg">
                        <div class="form-row text-center row-img-cadastro">
                            <label class="mb-1 lbl-default" for="img_perfil">Foto de Perfil</label>
                            <div onclick="selecionar_img_cadastro()" class="img-cadastro d-flex rounded-circle">
                                <img width="110" height="110" id="profile_picture_view" src="../img/flex_slides/150x150.jpg" alt="Profile" class="rounded-circle">
                                <div class="rounded-circle cadastro-content">
                                    <i class="fas fa-camera"></i>
                                    <label>Inserir</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" id="name" name="name" class="form-control required" placeholder="Digite seu nome">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input autocomplete="off" onkeyup="verificar_existencia_email(this.id, this.value)" type="email" id="email" name="email" class="form-control required" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <i onclick="eye_toggle(this,2)" class="far fa-eye-slash fa-2x eye-password top-30px"></i>
                            <label for="password">Senha</label>
                            <input autocomplete="off" type="password" id="password" name="password" class="form-control required" placeholder="Digite sua senha">
                        </div>
                        <!-- verify bug display error -->
                        <!-- <div class="form-group">
                            <label for="document">CPF</label>
                            <input onkeyup="verificar_cpf(this.id)" type="text" id="document" name="document" class="form-control required" minlength="14" placeholder="Digite seu CPF">
                        </div> -->
                        <!-- <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="text" id="celular" name="celular" class="form-control" placeholder="Digite seu celular">
                        </div> -->
                        <div class="form-group">
                            <label for="birth_date">Data de Nascimento</label>
                            <input onchange="verificar_data_nasc(this.id, this.value)" type="date" id="birth_date" name="birth_date" class="form-control required" placeholder="Data de nascimento">
                        </div>
                        <div class="form-group terms d-flex place-content-center">
                            <input name="check_terms" id="check_terms" type="checkbox" class="icheck required" value="yes">
                            <label for="check_terms">Concorde com os <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">termos e condições</a>.</label>
                        </div>
                    </div>
                    <!-- /step-->

                    <div class="step">
                        <input type="hidden" class="num_etapa" value="2">

                        <h3 class="main_question text-center"><strong>2/3</strong>Por favor verifique o código enviado no seu email</h3>
                        <div class="form-row text-center">
                            <i class="fas fa-envelope-open-text fa-4x" style="color: #1CB4D5"></i>
                        </div>
                        <div class="div-confirmation">
                            <input class="input-confirmation" id="code-1" type="number" max="9" step="1">
                            <input class="input-confirmation" id="code-2" type="number" max="9" step="1">
                            <input class="input-confirmation" id="code-3" type="number" max="9" step="1">
                            <input class="input-confirmation" id="code-4" type="number" max="9" step="1">
                            <input class="input-confirmation" id="code-5" type="number" max="9" step="1">
                        </div>
                        <div id="confirmation-empty" class="div-validation-confirmation text-danger hide">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <label>Código não preenchido.</label>
                        </div>
                        <div id="confirmation-invalid" class="div-validation-confirmation text-warning hide">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <label>Código inválido.</label>
                        </div>


                        <!-- <div class="form-group">
                            <input type="text" name="address" class="form-control required" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" name="city" class="form-control required" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" name="zip_code" class="form-control required" placeholder="Zip code">
                        </div>
                        <div class="form-group">
                            <div class="styled-select">
                                <select class="required" name="country">
									<option value="" selected>Select your country</option>
									<option value="Europe">Europe</option>
									<option value="Asia">Asia</option>
									<option value="North America">North America</option>
									<option value="South America">South America</option>
								</select>
                            </div>
                        </div> -->
                    </div>
                    <!-- /step-->

                    <div class="submit step">
                        <input type="hidden" class="num_etapa" value="3">
                        <h3 class="main_question text-center"><strong>3/3</strong>Conclusão de cadastro</h3>
                        <div id="intro">
                            <figure>
                                <img src="../img/wizard_intro_icon.svg" alt="">
                            </figure>
                            <h1>Agora falta pouco!</h1>
                            <p>Seu código de confirmação foi validado! Poderá usufruir da totalidade do AnalisaItapê assim que finalizar o cadastro. </p>
                            <!-- <p><strong></strong></p> -->
                        </div>
                    </div>
                    <!-- /step-->
                </div>
                <!-- /middle-wizard -->
                <div id="bottom-wizard">
                    <button type="button" name="backward" class="backward">Anterior</button>
                    <button type="button" id="foward" name="forward" class="forward">Prosseguir</button>
                    <button type="submit" name="process" class="submit">Finalizar</button>
                </div>
                <!-- /bottom-wizard -->
            </form>
        </div>
        <!-- /Wizard container -->
    </div>
    <!-- /Form_container -->

    <!-- Modal terms -->
    <div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet,
                        <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                    </p>
                    <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn_1" data-bs-dismiss="modal" aria-label="Close">Eu li</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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

    <!-- COMMON SCRIPTS -->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/common_scripts.js"></script>
    <script src="../js/main_admission.js"></script>
    <script src="../assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="../js/jquery-ui-1.8.22.min.js"></script>
    <script src="../js/jquery.wizard.js"></script>
    <script src="../js/jquery.validate.js"></script>
    <script src="../js/admission_func.js"></script>
    <script src="../js/verification_code.js"></script>
    <script src="../js/myfunc.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="../js/md5.js"></script>
    <script src="../js/md5.min.js"></script>

    <script>
        $('#document').mask('000.000.000-00');
        $('.input-confirmation').mask('0');

        var t = parseInt(<?php echo $n; ?>);
        if (t > 0) {
            getToast();
        }
    </script>
</body>

</html>