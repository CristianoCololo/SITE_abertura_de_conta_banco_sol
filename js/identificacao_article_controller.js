import { mostrarNotificacao } from "./utils";

function sendForm(method, action, key, value) {
    const form = document.createElement('form');
    form.method = method;
    form.action = action;

    const hiddenField = document.createElement('input');
    hiddenField.type = 'hidden';
    hiddenField.name = key;
    hiddenField.value = value;
    form.appendChild(hiddenField);

    form.style.display = "none";
    document.body.appendChild(form);
    form.submit();

}

const avancar_button = document.querySelector("#avancar");
const voltar_button = document.querySelector("#voltar");

const avancar = document.querySelector("#avancar");
const voltar = document.querySelector("#voltar");


const nextPage = "documentacao";
const previousPage = "index.php";

voltar.addEventListener('click', () => {
    localStorage.clear();
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
        mostrarNotificacao(processo['msg']);
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
            return { 'success': false, 'msg': "A senha tem que ter 4 caracteres nominimo" };
        } 
    }
    return { 'success': true, 'data': { 'username': username, 'email': email, 'password': password} };
}
