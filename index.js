const formulario = document.getElementsByClassName('formulario')[0];
const emailCorreto = "caiostuart06@gmail.com";
const senhaCorreta = "91325830";

formulario.addEventListener('submit', () => {
    const emailInserido = document.getElementsByClassName('formulario__input')[0].value;
    const senhaInserida = document.getElementsByClassName('formulario__input')[1].value;

    if(emailInserido == emailCorreto && senhaInserida == senhaCorreta){
        alert('Login efetuado com sucesso!');
    } else{
        alert('O e-mail ou a senha que você inseriu está incorreto.')
    }
})