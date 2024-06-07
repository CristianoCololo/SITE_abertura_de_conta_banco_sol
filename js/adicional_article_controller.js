const avancar_button = document.querySelector("#avancar");
const voltar_button = document.querySelector("#voltar");


const nextPage = "conclusao";
const previousPage = "documentacao";


voltar_button.addEventListener('click', () => {
    window.location.href = 'index.php'
});

avancar_button.addEventListener('click', () => {
    sendData(nextPage);
});

function sendData(article_name) {
    const data = {
        article: article_name
    };

    let processo = processarAdicional();

    if (processo['success']) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'aderir.php';

        for (const key in data) {
            if (data.hasOwnProperty(key)) {
                const hiddenField = document.createElement('input');
                hiddenField.type = 'hidden';
                hiddenField.name = key;
                hiddenField.value = data[key];
                form.appendChild(hiddenField);
            }
        }

        form.style.display = "none";
        document.body.appendChild(form);
        form.submit();
    } else {
        alert(processo['msg']);
    }
}

function processarAdicional() {

    const data_nascimento = document.getElementById("data_nascimento").value;

    if (!data_nascimento) {
        return { 'success': false, 'msg': "A data de nascimento nao pode estar vazia" };
    }
    const date = new Date(data_nascimento);
    const ano = date.getFullYear();
    
    if (2024 - parseInt(ano) < 18) {
        return { 'success': false, 'msg': "Precisa ser maior de 18 para abrir uma conta online"};
    }
    return { 'success': true, 'msg': "" };
}
