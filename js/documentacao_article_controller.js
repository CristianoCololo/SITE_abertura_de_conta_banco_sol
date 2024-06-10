
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

const nextPage = "adicional";
const previousPage = "identificacao";

voltar_button.addEventListener('click', () => {
    localStorage.removeItem('dadosDocumentacao');
    localStorage.removeItem('dadosAdicional');
    sendForm('POST','aderir.php','article',previousPage);
});

avancar_button.addEventListener('click', () => {
    sendData(nextPage);
});

function sendData(article_name) {
    let processo = processarDocumentacao();
    if (processo['success']) {
        localStorage.setItem('dadosDocumentacao', JSON.stringify(processo['data']));
        sendForm('POST','aderir.php','article',nextPage);
    } else {
        alert(processo['msg']);
    }
}

function processarDocumentacao() {

    const fotoInput = document.getElementById("foto_perfil");
    const numero_bi = document.getElementById("numero_bi").value;
    const bi_num_regex = /^\d{9}[A-Z]{2}\d{3}$/;

    if (numero_bi === '') {
        return { 'success': false, 'msg': "Numero de bi nao pode estar vazio" };
    }
    if (!bi_num_regex.test(numero_bi)) {
        return { 'success': false, 'msg': "Esse numero de BI não é válido" };
    }

    return { 'success': true, 'data': { 'bi': numero_bi } };
}
