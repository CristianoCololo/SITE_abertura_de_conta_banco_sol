import { mostrarNotificacao } from "./utils";

const entrarButton = document.getElementById("entrar");
const email = document.getElementById("email");
const code = document.getElementById("password");


entrarButton.addEventListener('click', () => {
    fetch('php/read.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email: email.value,
            password: password.value
        })
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro na requisição: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {

            let database_email = data.data.email;
            let database_code = data.data.code;

            let verificar_email = (database_email == email.value);
            let verificar_code = (database_code == code.value);

            if (verificar_email && verificar_code) {
                form.method = 'POST';
                form.action = 'perfil.php';
                
                for (let key in data.data) {
                    if (dado.hasOwnProperty(key)) {
                        const hiddenField = document.createElement('input');
                        hiddenField.type = 'hidden';
                        hiddenField.name = key;
                        hiddenField.value = data.data.key;
                        form.appendChild(hiddenField);
                    }
                }

                form.style.display = "none";
                document.body.appendChild(form);
                form.submit();

            } else {
                mostrarNotificacao('O Email ou Senha errada');
            }

        })
        .catch(error => {
            console.error('Erro:', error);
            document.getElementById('resultado').textContent = 'Erro: ' + error;
        });
});