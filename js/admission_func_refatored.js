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
                // console.log(num_etapa);

                if ($("input#website").val().length != 0) {
                    return false;
                }

                if (!state.isMovingForward) return true;
                var inputs = $(this).wizard("state").step.find(":input");

                if (num_etapa == 1 && inputs.valid()) {
                    let objcpf = document.getElementById("document");
                    let retorno = true;

                    if (objcpf.value != "") {
                        if (verificar_cpf("document")) {
                            console.log("doc valido");
                            if (objcpf.value.length == 14) {
                                console.log("doc 14 length");

                                $.get(
                                    "../php/utils/verificar_existencia_cpf.php?doc=" +
                                    encodeURI(objcpf.value),
                                    (data) => {
                                        if (data == "OK") {
                                            console.log("doc n cadastrado");
                                            display_error(objcpf, true);
                                        } else {
                                            console.log("doc ja cadastrado");
                                            display_error(objcpf, false, "CPF já cadastrado");
                                            retorno = false;
                                            return false;
                                        }
                                    }
                                );
                            }
                        } else {
                            display_error(objcpf, false, "CPF inválido");
                            return false;
                        }
                    }
                }

                if (num_etapa == 2) {
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
                        console.log("a");
                        $("#confirmation-empty").addClass("hide");
                        $("#confirmation-invalid").removeClass("hide");
                        return false;
                    } else {
                        console.log("b");
                        $("#confirmation-invalid").addClass("hide");
                    }
                }

                return !inputs.length || !!inputs.valid();
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

const admissionFunc = {
    sendMailConfirmation: function() {
        const email = $("#email").val();
        const confirmation_code = String(generate(5));

        if (email != "") {
            const codeHash = md5(confirmation_code);

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
    },
    getCurrentStep: function(ref) {
        $(ref)
            .wizard("state")
            .step.find(".num_etapa")[0].value
    },
    updateProgressStep: function(event, state) {
        $("#progressbar").progressbar("value", state.percentComplete);
        $("#location").text(
            "(" + state.stepsComplete + "/" + state.stepsPossible + ")"
        );
    },
    bind: function() {
        $("#wizard_container")
            .wizard({
                stepsWrapper: "#wrapped",
                submit: ".submit",
                afterSelect: admissionFunc.updateProgressStep,
                beforeSelect: function(event, state) {
                    if ($("input#website").val().length != 0) {
                        return false;
                    }

                    if (!state.isMovingForward) return true;
                    var inputs = $(this).wizard("state").step.find(":input");

                    if (admissionFunc.getCurrentStep(this) === 1 && inputs.valid()) {
                        let objcpf = document.getElementById("document");
                        let retorno = true;

                        if (objcpf.value != "") {
                            if (verificar_cpf("document")) {
                                console.log("doc valido");
                                if (objcpf.value.length == 14) {
                                    console.log("doc 14 length");

                                    $.get(
                                        "../php/utils/verificar_existencia_cpf.php?doc=" +
                                        encodeURI(objcpf.value),
                                        (data) => {
                                            if (data == "OK") {
                                                console.log("doc n cadastrado");
                                                display_error(objcpf, true);
                                            } else {
                                                console.log("doc ja cadastrado");
                                                display_error(objcpf, false, "CPF já cadastrado");
                                                retorno = false;
                                                return false;
                                            }
                                        }
                                    );
                                }
                            } else {
                                display_error(objcpf, false, "CPF inválido");
                                return false;
                            }
                        }
                    }

                    if (num_etapa == 2) {
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
                            console.log("a");
                            $("#confirmation-empty").addClass("hide");
                            $("#confirmation-invalid").removeClass("hide");
                            return false;
                        } else {
                            console.log("b");
                            $("#confirmation-invalid").addClass("hide");
                        }
                    }

                    return !inputs.length || !!inputs.valid();
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
    }
}


$(document).ready(admissionFunc.bind)