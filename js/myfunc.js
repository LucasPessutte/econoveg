function selecionar_img_cadastro() {
    $("#profile_picture").click();
}

function show_picture(obj, element_id, form = "") {
    if (obj.files && obj.files[0]) {
        var file = new FileReader();
        file.onload = function(e) {
            document.getElementById(element_id).src = e.target.result;
        };
        file.readAsDataURL(obj.files[0]);
        if (form != "") {
            $('#div-submit-profile').addClass('show').removeClass('hide');
        }
    } else {
        if (form != "") {
            $('#div-submit-profile').addClass('hide').removeClass('show');
        }
    }

}

function getToast() {
    // Get the snackbar DIV
    var snackbar = document.getElementById("snackbar");

    // Add the "show" class to DIV
    snackbar.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function() {
        snackbar.className = snackbar.className.replace("show", "");
    }, 3000);
}

function generate(n) {
    var add = 1,
        max = 12 - add; // 12 is the min safe number Math.random() can generate without it starting to pad the end with zeros.

    if (n > max) {
        return generate(max) + generate(n - max);
    }

    max = Math.pow(10, n + add);
    var min = max / 10; // Math.pow(10, n) basically
    var number = Math.floor(Math.random() * (max - min + 1)) + min;

    return ("" + number).substring(add);
}

function eye_toggle(obj, pos_input = 0, toggle_id = 'check-toggle') {
    let icon_toggle = obj;
    // Posição 0 sempre o input
    let input_toggle = obj.parentNode.children[pos_input];
    // Posição 3 sempre o checkbox
    let toggle = document.getElementById(toggle_id);

    console.log(icon_toggle);
    console.log(input_toggle);
    console.log(toggle.id);

    if (toggle.value == 0) {
        toggle.value = 1;
        icon_toggle.classList.add("fa-eye");
        icon_toggle.classList.remove("fa-eye-slash");
        input_toggle.type = "text";
    } else if (toggle.value == 1) {
        toggle.value = 0;
        icon_toggle.classList.add("fa-eye-slash");
        icon_toggle.classList.remove("fa-eye");
        input_toggle.type = "password";
    }
}

async function get_address_by_cep(cep){
    let returnFunction = {};
    try {
        const formated_cep = cep.replace(/\D/g, '');
        const url = `https://viacep.com.br/ws/${formated_cep}/json/`;
        const response = await fetch(url);

        if(!response.ok){
            throw new Error(`Erro ao buscar endereço: ${response.status}`);
        }

        const data = await response.json();

        returnFunction = {
            status: 1,
            message: "Endereço resgatados com sucesso.",
            data
        }
    } catch (error) {
        returnFunction = {
            status: 0,
            message: "Erro ao buscar endereço: " + error.message,
            data: {}
        }
    }

    return returnFunction;
}