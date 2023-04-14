/*  Wizard */
jQuery(function($) {
    "use strict";
    $("#wizard_container")
        .wizard({
            stepsWrapper: "#wrapped",
            submit: ".submit",
            beforeSelect: function(event, state) {
                var num_etapa = $(this)
                    .wizard("state")
                    .step.find(".num_etapa")[0].value;

                console.log(num_etapa);
                if (num_etapa != -1) {
                    if ($("input#website").val().length != 0) {
                        return false;
                    }

                    // let email = event.target.value;
                    // document
                    //     .getElementById("email")
                    //     .addEventListener("change", (event) => {

                    //     });

                    if (!state.isMovingForward) return true;
                    var inputs = $(this).wizard("state").step.find(":input");

                    if (num_etapa == 1 && inputs.valid()) {
                        let email = $("#email").val();

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
                                        alert("Não foi possível enviar o email de confirmação!");
                                        return false;
                                    }
                                }
                            );
                        }
                    }

                    if (num_etapa == 2 && inputs.valid()) {
                        for (var inpt = 0; inpt < inputs.length; inpt++) {
                            var inpt_atual = inputs[inpt];

                            if (
                                inpt_atual.classList[0] === "input-confirmation" &&
                                inpt_atual.value === ""
                            ) {
                                $("#confirmation-empty").removeClass("hide");
                                $("#confirmation-invalid").addClass("hide");
                                return false;
                            } else {
                                $("#confirmation-empty").addClass("hide");
                                $("#confirmation-invalid").addClass("hide");
                            }
                        }

                        let codigoInput =
                            "" +
                            $("#code-1").val() +
                            $("#code-2").val() +
                            $("#code-3").val() +
                            $("#code-4").val() +
                            $("#code-5").val();

                        let codigoSession = sessionStorage.getItem("confirmCode");

                        let encrypted = md5(codigoInput);

                        if (codigoSession != encrypted) {
                            $("#confirmation-empty").addClass("hide");
                            $("#confirmation-invalid").removeClass("hide");
                            return false;
                        } else {
                            $("#confirmation-invalid").addClass("hide");
                        }
                    }
                    return !inputs.length || !!inputs.valid();
                }
            },
        })
        .validate({
            errorPlacement: function(error, element) {
                if (element.is(":radio") || element.is(":checkbox")) {
                    error.insertBefore(element.next());
                } else {
                    error.insertAfter(element);
                }
            },
        });
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
        afterSelect: function(event, state) {
            $("#progressbar").progressbar("value", state.percentComplete);
            $("#location").text(
                "(" + state.stepsComplete + "/" + state.stepsPossible + ")"
            );
        },
    });
});

function display_error(obj, resposta, msg = "Dado inválido") {
    $("#error_" + obj.id).remove();
    $("#" + obj.id).removeClass("bc-warning");

    if (!resposta) {
        $("#foward").attr("disabled", true);
        $("#" + obj.id).addClass("bc-warning");

        let div = document.createElement("div");
        div.setAttribute("id", "error_" + obj.id);

        let span = document.createElement("span");
        span.setAttribute("class", "span-error-form text-warning");
        span.innerHTML =
            "<i class='fas fa-exclamation-circle me-2 text-warning'></i>" + msg;

        div.appendChild(span);
        obj.parentNode.appendChild(div);
    } else {
        if (verificacao_email && verificacao_data) {
            $("#foward").removeAttr("disabled");
        }
    }
}

function verificar_cpf(element_id) {
    // Retirar mascara do cpf
    let obj = document.getElementById(element_id);

    if (obj.value.length >= 14) {
        let strCPF = obj.value;
        strCPF = strCPF.replaceAll(".", "");
        strCPF = strCPF.replace("-", "");

        var Soma;
        var Resto;
        Soma = 0;
        if (strCPF == "00000000000")
            return display_error(obj, false, "CPF inválido");

        for (i = 1; i <= 9; i++)
            Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
        Resto = (Soma * 10) % 11;

        if (Resto == 10 || Resto == 11) Resto = 0;
        if (Resto != parseInt(strCPF.substring(9, 10)))
            return display_error(obj, false, "CPF inválido");

        Soma = 0;
        for (i = 1; i <= 10; i++)
            Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
        Resto = (Soma * 10) % 11;

        if (Resto == 10 || Resto == 11) Resto = 0;
        if (Resto != parseInt(strCPF.substring(10, 11)))
            return display_error(obj, false, "CPF inválido");
        return verificar_existencia_cpf(obj.value);
    }
}

function verificar_existencia_cpf(doc) {
    $.get(
        "../php/utils/verificar_existencia_cpf.php?doc=" + encodeURI(doc),
        (data) => {
            let obj = document.getElementById("document");
            if (data != "OK") {
                return display_error(obj, false, "CPF já cadastrado");
            } else {
                return display_error(obj, true);
            }
        }
    );
}

let verificacao_email = false;
let verificacao_data = false;

let primeira_verificacao = true;

function verificar_existencia_email(element_id, email) {
    if (primeira_verificacao) {
        primeira_verificacao = false;
        $('#email').val("");
        return true;
    }
    console.log(email);
    if (email != "") {
        if (email.includes("@") && email.includes(".") && email.length > 5) {
            $.get(
                "../php/utils/verificar_existencia_email.php?email=" + encodeURI(email),
                (data) => {
                    let obj = document.getElementById(element_id);
                    if (data != "OK") {
                        verificacao_email = false;
                        return display_error(obj, false, "E-mail já cadastrado");
                    } else {
                        verificacao_email = true;
                        return display_error(obj, true);
                    }
                }
            );
        }
    } else {
        verificacao_email = true;
        return display_error(obj, true);
    }
}

function verificar_data_nasc(element_id, data_nasc) {
    // if (data_nasc) {
    let ano_nasc = data_nasc.split("-")[0];
    let mes_nasc = data_nasc.split("-")[1];
    let dia_nasc = data_nasc.split("-")[2];

    var d = new Date(),
        ano_atual = d.getFullYear(),
        mes_atual = d.getMonth() + 1,
        dia_atual = d.getDate(),
        ano_aniversario = +ano_aniversario,
        mes_aniversario = +mes_aniversario,
        dia_aniversario = +dia_aniversario,
        quantos_anos = ano_atual - ano_nasc;

    if (
        mes_atual < mes_nasc ||
        (mes_atual == mes_aniversario && dia_atual < dia_nasc)
    ) {
        quantos_anos--;
    }

    quantos_anos < 0 ? 0 : quantos_anos;

    let obj = document.getElementById(element_id);
    if (quantos_anos <= 16) {
        verificacao_data = false;
        return display_error(obj, false, "Necessário no minimo 16 anos");
    } else {
        verificacao_data = true;
        return display_error(obj, true);
    }
}