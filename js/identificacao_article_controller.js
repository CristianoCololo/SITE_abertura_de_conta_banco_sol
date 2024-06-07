import {  } from "form.js";
import {  } from "utils.js";

const avancar = document.querySelector("#avancar");
const voltar = document.querySelector("#voltar");


const nextPage = "documentacao";
const previousPage = "index.php";

voltar.addEventListener('click', () => {
    localStorage.removeItem('dadosIdentificacao');
    localStorage.removeItem('dadosDocumentacao');
    localStorage.removeItem('dadosAdicional');
    window.location.href = previousPage;
});

avancar.addEventListener('click', () => {
    sendData(nextPage);
});

function sendData(article_name) {

    let processo = processarIdentificacao();
    if (processo['success']) {
        localStorage.setItem('dadosIdentificacao', JSON.stringify(processo['data']));
        sendForm('POST','aderir.php','article',nextPage);
    } else {
        alert(processo['msg']);
    }
}

function processarIdentificacao() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value
    const password = document.getElementById("password").value
    const confirmedPassword = document.getElementById("confirmed_password").value

    if (username === '' || email === '' || password === '' || confirmedPassword === '') {
        return { 'success': false, 'msg': "Nenhum dos campos pode estar vazio" };
    } else {
        if (username.length <= 3 || /[0-9]/.test(username)) {
            return { 'success': false, 'msg': "Esse nome de usuário não é válido" };
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            return { 'success': false, 'msg': "Esse email não é válido" };
        }

        if (password !== confirmedPassword) {
            return { 'success': false, 'msg': "A senha não corresponde à senha confirmada" };
        }else if(password.length < 4) {
            return { 'success': false, 'msg': "A senha não tem que ter 4 caracteres nominimo" };
        } 
    }
    return { 'success': true, 'data': { 'username': username, 'email': email, 'password': password} };
}
