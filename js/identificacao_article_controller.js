const avancar = document.querySelector("#avancar");
const voltar = document.querySelector("#voltar");


const nextPage = "documentacao";
const previousPage = "index.php";

voltar.addEventListener('click', () => {
    window.location.href = previousPage;
});

avancar.addEventListener('click', () => {
    sendData(nextPage);
});

function sendData(article_name) {

    let processo = processarIdentificacao();

    if (processo['success']) {

        let arquivo_criado;

        var requestOptions = {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(processo['data'])
        };


        fetch('../aderindo.php', requestOptions)
            .then(function (response) {
                if (!response.ok) {
                    throw new Error('Ocorreu um erro ao processar a solicitação.');
                }
                return response.text();
            })
            .then(function (data) {
                arquivo_criado = data;
            })
            .catch(function (error) {
                console.error('Erro:', error);
            });

        if (arquivo_criado) {

        }

        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'aderir.php';

        const hiddenField = document.createElement('input');
        hiddenField.type = 'hidden';
        hiddenField.name = 'article';
        hiddenField.value = article_name;
        form.appendChild(hiddenField);
        form.style.display = "none";
        document.body.appendChild(form);
        form.submit();

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
        }
    }
    return { 'success': true, 'data': { 'username': username, 'email': email, 'password': password, 'goTo': nextPage } };
}
