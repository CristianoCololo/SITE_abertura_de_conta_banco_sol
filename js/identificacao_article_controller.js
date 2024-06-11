import { mostrarNotificacao } from "./utils";
import { sendForm } from "./sendForm";
import { avancar, voltar } from "./elementos";

voltar.addEventListener('click', () => {
    localStorage.clear();
    window.location.href = "index.php";
});

avancar.addEventListener('click', () => {
    let processo = processarIdentificacao();
    if (processo.sucesso) {
        localStorage.setItem('a_ident', JSON.stringify(processo.dados));
        sendForm('POST','aderir.php','article',"documentacao");
    } else {
        mostrarNotificacao(processo.info);
    }
});

function processarIdentificacao() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value
    const password = document.getElementById("password").value
    const confirmedPassword = document.getElementById("confirmed_password").value

    if (username === '' || email === '' || password === '' || confirmedPassword === '') {
        return { 
            'sucesso': false, 
            'info': "Nenhum dos campos pode estar vazio",
            'dados': null,
        };
    } else {
        if (username.length <= 3 || /[0-9]/.test(username)) {
            return { 
                'sucesso': false, 
                'info': "Esse nome de usuário não é válido. Tente outro",
                'dados': null,
            };
        }
        if (!(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email))){
            return { 
                'sucesso': false, 
                'info': "Este email não é válido. Tente outro",
                'dados': null,
            };
        }
        if (password !== confirmedPassword) {
            return { 
                'sucesso': false, 
                'info': "A senha não corresponde à senha confirmada",
                'dados': null,
            };
        }else if(password.length < 4) {
            return { 
                'sucesso': false, 
                'info': "A senha deve ter no minimo quatro(4) caracteres",
                'dados': null,
            };
        } 
    }
    return { 
        'sucesso': true, 
        'info': '',
        'dados': { 
            'username': username, 
            'email': email, 
            'assword': password,
            },
        };
}
