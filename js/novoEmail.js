function setError(msg = "") {
    $('#msg_error').html(msg);
    if (msg != "") {
        $('#input_label_email').addClass('input_label_error');
        $('#div_error').addClass('show').removeClass('hide');
    } else {
        $('#input_label_email').removeClass('input_label_error');
        $('#div_error').addClass('hide').removeClass('show');
    }
}

function setStep(step, email = "") {
    $('#input-confirmation').val("");
    if (step == 1) {
        $('#email_enviado').html("");

        $('#div-email').addClass('show').removeClass('hide');
        $('#div-email-confirmation').addClass('hide').removeClass('show');

        $('#btn-next').addClass('show').removeClass('hide');
        $('#btn-return').addClass('hide').removeClass('show');
        $('#btn-submit').addClass('hide').removeClass('show');
    } else if (step == 2) {
        $('#email_enviado').html(email);

        $('#div-email').addClass('hide').removeClass('show');
        $('#div-email-confirmation').addClass('show').removeClass('hide');

        $('#btn-next').addClass('hide').removeClass('show');
        $('#btn-return').addClass('show').removeClass('hide');
        $('#btn-submit').addClass('show').removeClass('hide');
    }
}

//STEP 1
function verificar_existencia_email(email) {
    if (email != "") {
        if (email.includes("@") && email.includes(".") && email.length > 5) {
            $.get(
                "../php/utils/verificar_existencia_email.php?email=" + encodeURI(email),
                (data) => {
                    // let obj = document.getElementById(element_id);
                    if (data != "OK") {
                        setError('Email já cadastrado')
                    } else {
                        setError();

                        let confirmation_code = String(generate(5));

                        if (email != "") {
                            let codeHash = md5(confirmation_code);

                            sessionStorage.setItem("confirmCode", codeHash);
                            $.get(
                                "../php/utils/send_code.php?email=" +
                                email +
                                "&confirmation_code=" +
                                confirmation_code,
                                (data) => {
                                    if (data != "OK") {
                                        setError('Não foi possível enviar o código de confirmação')
                                    } else {
                                        setStep(2, email);
                                    }
                                }
                            );
                        }
                    }
                }
            );
        } else {
            setError('Email Inválido');
        }
    } else {
        setError('Necessário preencher o email')
    }
}

//SUBMIT
function btn_submit() {
    const inputs = $('.input-confirmation');

    let codigoInput = "";
    for (let i = 0; i < inputs.length; i++) {
        let input = inputs[i];

        if (input.value === "") {
            return setError('Código não preenchido')
        } else {
            codigoInput += input.value;
        }
    }

    const codigoSession = sessionStorage.getItem("confirmCode");

    const encrypted = md5(codigoInput);

    if (codigoSession != encrypted) {
        setError('Código inválido')
    } else {
        $("#form-update-email").submit();
    }
}