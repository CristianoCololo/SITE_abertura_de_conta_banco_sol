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
    const data = {
        article: article_name
    };

    let processo = processarIdentificacao();

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
    return { 'success': true, 'msg': "" };
}
