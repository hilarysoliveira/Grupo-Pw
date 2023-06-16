const inputs = document.querySelectorAll("[required]");
inputs.forEach((elemento) => {
    elemento.addEventListener("blur", (evento)=>{
        console.log("sair")
    });
});


function Enviar(){
    const inputNome = document.getElementById("inputNome");
// Limpar os campos
inputCPF.value = "";
inputNome.value = "";
inputEmail.value = "";
inputCelular.value = "";
}
