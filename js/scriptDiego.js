function validar() {
    const inputNome = document.getElementById("inputNome");
    const inputEmail = document.getElementById("inputEmail");
    const inputTelefone = document.getElementById("inputTelefone");
    const inputEndereco = document.getElementById("inputEndereco");
    const inputCidade = document.getElementById("inputCidade");
    const inputEstado = document.getElementById("inputEstado");
    const inputMotivo = document.getElementById("inputMotivo");
    const gridCheck = document.getElementById("gridCheck");
    const mensagemErro = document.getElementById("mensagemErro");

    if (inputNome.value.length < 2 || inputNome.value.length > 50) {
        mensagemErro.textContent = "Nome inválido. Insira um nome com 2 a 50 caracteres.";
        return; // interrompe a execução se houver erro
    }
}

document.querySelector("form").addEventListener("submit", validar);