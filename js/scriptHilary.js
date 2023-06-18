const form = document.querySelector("form");
const phone = document.getElementById("phone").value;

    
form.addEventListener("submit", submitForm);

const inputs = document.querySelectorAll("[required]");
inputs.forEach( (elemento) => {
    elemento.addEventListener("blur", (evento)=>{
        validaCampo(evento.target)
    });

});

function validaCampo(campo){
    const msnErro = campo.parentNode.querySelector("[data-erro]");
    if(campo.name === "Nome"){
        if(campo.value.length<5){
            msnErro.textContent="Digite o nome completo";

        }else{
            msnErro.textContent="";
        }
    }
}

function Enviar(){
    const inputNome = document.getElementById("inputNome");
// Limpar os campos
inputCPF.value = "";
inputNome.value = "";
inputEmail.value = "";
inputCelular.value = "";
}

function limpar() {
    // Código da função de limpeza aqui
    console.log("Função de limpeza chamada!");
}

function submitForm(event){
    event.preventDefault();

    const nome = document.getElementById("nome").value;
    const telefone = document.getElementById("telefone").value;
    const email = document.getElementById("email").value;
}

function validPhone(campo) {
    const telefone = campo.value;
    const regex = /^\(\d{2}\) \d{4,5}-\d{4}$/;
    if (!regex.test(telefone)) {
      alert("O número de telefone informado é inválido");
    
 }

 

function validarEmail(email) {
    const regex = /\S+@\S+\.\S+/;
    if (!regex.test(email)) {
      alert("O e-mail informado é inválido");
    }
  }}

  function validarCEP(cep) {
    const regex = /^\d{5}-\d{3}$/;
    if (!regex.test(cep)) {
      alert("O CEP informado é inválido");
      return false;
    }
    
    // Aplica a máscara de CEP
    $('#inputZip').mask('00000-000');
    
    return true;
  }