import {  } from "form.js";
import {  } from "util.js";


const nextPage = "conclusao";
const previousPage = "documentacao";

voltar_button.addEventListener('click', () => {
    localStorage.removeItem('dadosAdicional');
    sendForm('POST','aderir.php','article',previousPage);
});

avancar_button.addEventListener('click', () => {
    sendData(nextPage);
});

function sendData(article_name) {
    let processo = processarDocumentacao();
    if (processo['success']) {
        localStorage.setItem('dadosAdicional ', JSON.stringify(processo['data']));
        sendForm('POST','aderir.php','article',nextPage);
    } else {
        alert(processo['msg']);
    }
}

function processarAdicional() {
    const data_nascimento = document.getElementById("data_nascimento").value;
    const genero = document.getElementById("genero_choice").value;
    const provincia = document.getElementById("provincia").value;

    if (!data_nascimento) {
        return { 'success': false, 'msg': "A data de nascimento nao pode estar vazia" };
    }
    const date = new Date(data_nascimento);
    const ano = date.getFullYear();
    
    if (2024 - parseInt(ano) < 18) {
        return { 'success': false, 'msg': "Precisa ser maior de 18 para abrir uma conta online"};
    }
    return { 'success': true, 'data': { 'data_nascimento' : data_nascimento, 'genero' : genero, 'provincia' : provincia} };
}