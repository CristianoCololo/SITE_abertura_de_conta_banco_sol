const entrarButton = document.getElementById("buttonEntrar");
const username = document.getElementById("username");
const code = document.getElementById("passwolrd");
const aderirButton = document.getElementById("buttonAderir");

aderirButton.addEventListener('click', () => {
    window.location.href = "aderir.hp?article='indetificacao'"

});

entrarButton.addEventListener('click', () => {
    fetch('validarDadosDeEntrada.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro na requisição: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
            // Corrigido para acessar as propriedades do objeto JSON corretamente

            let database_username = data.data.nome;
            let input_username = username.value;

            let database_code = data.data.code;
            let input_code = code.value;

            let verificar_username = (database_username == username.value);
            let verificar_code = (database_code == code.value);
            
            if (verificar_username && verificar_code) {
                alert("BEM VINDO");
            }else{
                alert("O NOME DE USUARIO OU A SENHA ESTA ERRADA");
            }
            
        })
        .catch(error => {
            console.error('Erro:', error);
            document.getElementById('resultado').textContent = 'Erro: ' + error;
        });
});