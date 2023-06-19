document.getElementById("buttonEnviar").addEventListener("click", validar);

function validar(event) {
    event.preventDefault(); // Impede o comportamento padrão do botão

    const inputNome = document.getElementById("inputNome");
    const inputEmail = document.getElementById("inputEmail");
    const inputTelefone = document.getElementById("inputTelefone");
    const inputEndereco = document.getElementById("inputEndereco");
    const inputCidade = document.getElementById("inputCidade");
    const inputEstado = document.getElementById("inputEstado");
    const inputCEP = document.getElementById("inputCEP");
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
    if (!regexCelular.test(inputTelefone.value)) {
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

    if (inputFormato.value.length === 0){
        mensagemErro.textContent = "Formato é um campo obrigatório";
        return; 
    }

    if(inputMedida.value.length === 0){
        mensagemErro.textContent = "Medida é um campo obrigatório";
        return;

    }

    mensagemErro.textContent = "Enviado com sucesso!";

    inputNome.value = "";
    inputEmail.value = "";
    inputTelefone.value = "";
    inputEndereco.value = "";
    inputCidade.value = "";
    inputEstado.value = "";
    inputCEP.value = "";
}

function revelacao() {



    const inputNome = document.getElementById("inputNome");
    const inputEmail = document.getElementById("inputEmail");
    const inputTelefone = document.getElementById("inputTelefone");
    const inputFormato = document.getElementById("inputFormato")
    const inputMedida = document.getElementById("inputMedida");
    const inputEndereco = document.getElementById("inputEndereco");
    const inputCidade = document.getElementById("inputCidade");
    const inputEstado = document.getElementById("inputEstado");
    const inputCEP = document.getElementById("inputCEP")
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
    if (!regexCelular.test(inputTelefone.value)) {
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

    if (inputFormato.value.length === 0){
        mensagemErro.textContent = "Formato é um campo obrigatório";
        return; 
    }

    if(inputMedida.value.length === 0){
        mensagemErro.textContent = "Medida é um campo obrigatório";
        return;

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
    inputTelefone.value = "";
    inputEndereco.value = "";
    inputCidade.value = "";
    inputEstado.value = "";
    inputFormato.value ="";
    inputMedida.value = "";
    inputCEP.value = "";



}