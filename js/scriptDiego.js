document.getElementById("buttonEnviar").addEventListener("click", validar);

function validar(event) {
    event.preventDefault(); // Impede o comportamento padrão do botão

    const inputNome = document.getElementById("inputNome");
    const inputEmail = document.getElementById("inputEmail");
    const inputCelular = document.getElementById("inputTelefone");
    const inputEndereco = document.getElementById("inputEndereco");
    const inputCidade = document.getElementById("inputCidade");
    const inputEstado = document.getElementById("inputEstado");
    const inputMotivo = document.getElementById("inputMotivo");
    const gridCheck = document.getElementById("gridCheck");
    const mensagemErro = document.getElementById("mensagemErro");

    if (inputNome.value.length < 2 || inputNome.value.length > 50) {
        mensagemErro.textContent = "Nome inválido. Insira um nome com 2 a 50 caracteres.";
        return; // Interrompe a execução se houver erro
    }

    if (inputEmail.value.length < 5 || inputEmail.value.length > 50) {
        mensagemErro.textContent = "E-mail inválido. Insira um e-mail com 5 a 50 caracteres.";
        return; // interrompe a execução se houver erro
    }

    // Validar formato do número de celular
    const regexCelular = /^\d{10,20}$/;
    if (!regexCelular.test(inputCelular.value)) {
        mensagemErro.textContent = "Número de celular inválido. Insira um número de celular válido (apenas dígitos, no mínimo 10 e no máximo 20 caracteres).";
        return; // interrompe a execução se houver erro
    }

    if (inputEndereco.value.length === 0) {
        mensagemErro.textContent = "Número e rua é um campo obrigatório.";
        return; // Interrompe a execução se houver erro
    }

    // Validação do campo "Cidade"
    if (inputCidade.value.length === 0) {
        mensagemErro.textContent = "Cidade é um campo obrigatório.";
        return; // Interrompe a execução se houver erro
    }

    // Validação do campo "Estado"
    if (inputEstado.value.length === 0) {
        mensagemErro.textContent = "Estado é um campo obrigatório.";
        return; // Interrompe a execução se houver erro
    }

    // Validação do campo "Motivo do contato"
    if (inputMotivo.value.length === 0) {
        mensagemErro.textContent = "Motivo do contato é um campo obrigatório.";
        return; // Interrompe a execução se houver erro
    }

    // Validação do campo "gridCheck"
    if (!gridCheck.checked) {
        mensagemErro.textContent = "Você precisa autorizar a HS Fotografias a entrar em contato.";
        return; // Interrompe a execução se houver erro
    }

    mensagemErro.textContent = "Enviado com sucesso!";

    inputNome.value = "";
    inputEmail.value = "";
    inputCelular.value = "";
    inputEndereco.value = "";
    inputCidade.value = "";
    inputEstado.value = "";
    inputMotivo.value = "";
    gridChec.checked = false;
}

function checkbox() {

    const simCheck = document.getElementById('simCheck');
    const naoCheck = document.getElementById('naoCheck');
    const inputNome = document.getElementById('inputNome');
    const inputEmail = document.getElementById('inputEmail');
    const inputCelular = document.getElementById('inputCelular');

    if (simCheck.checked === true) {
        if (naoCheck.checked === true) {
            simCheck.checked = false;
            naoCheck.checked = false;
            mensagemErro.textContent = "Você não pode marcar ambas as opções.";
            return;
        }
        else {
            mensagemErro.textContent = "";
        }
    }
    else {
        mensagemErro.textContent = "";
    }
    if (naoCheck.checked === true) {
        inputNome.disabled = true;
        inputEmail.disabled = true;
        inputCelular.disabled = true;
    }
    else {
        inputNome.disabled = false;
        inputEmail.disabled = false;
        inputCelular.disabled = false;
    }
}

document.getElementById("buttonEnviar2").addEventListener("click", validarFeedback);

function validarFeedback() {

    const simCheck = document.getElementById('simCheck');
    const naoCheck = document.getElementById('naoCheck');
    const inputNome = document.getElementById('inputNome');
    const inputEmail = document.getElementById('inputEmail');
    const inputCelular = document.getElementById('inputCelular');
    const inputClassificacao = document.getElementById('inputClassificacao');
    const inputClassificacao2 = document.getElementById('inputClassificacao2');
    const inputClassificacao3 = document.getElementById('inputClassificacao3');
    const mensagemErro = document.getElementById("mensagemErro");

    if (simCheck.checked === false && naoCheck.checked === false) {
        mensagemErro.textContent = "Você primeiro precisa escolher se quer se identificar ou não"
        return;
    };

    if (simCheck.checked === true) {

        // Validar o formato de Nome
        if (inputNome.value.length < 2 || inputNome.value.length > 50) {
            mensagemErro.textContent = "Nome inválido. Insira um nome com 2 a 50 caracteres.";
            return; // Interrompe a execução se houver erro
        }

        // Validar o formato de E-mail
        if (inputEmail.value.length < 5 || inputEmail.value.length > 50) {
            mensagemErro.textContent = "E-mail inválido. Insira um e-mail com 5 a 50 caracteres.";
            return; // interrompe a execução se houver erro
        }

        // Validar formato do número de celular
        const regexCelular = /^\d{10,20}$/;
        if (!regexCelular.test(inputCelular.value)) {
            mensagemErro.textContent = "Número de celular inválido. Insira um número de celular válido (apenas dígitos, no mínimo 10 e no máximo 20 caracteres).";
            return; // interrompe a execução se houver erro
        }
    }

    //verifica se os campos de feedback foram preenchidos
    if (inputClassificacao.value.length === 0 || inputClassificacao2.value.length === 0 || inputClassificacao3.value.length === 0) {
        mensagemErro.textContent = "Para enviar o formulário é necessário responder às 3 perguntas de feedback.";
        return; // interrompe a execução se houver erro
    }

    mensagemErro.textContent = "Enviado com sucesso!";

    inputNome.value = "";
    inputEmail.value = "";
    inputCelular.value = "";
    inputClassificacao.value = "";
    inputClassificacao2.value = "";
    inputClassificacao3.value = "";
    simCheck.checked = false;
    naoCheck.checked = false;
}