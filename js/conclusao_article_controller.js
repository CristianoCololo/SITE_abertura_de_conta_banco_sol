const feito_button = document.querySelector("#feito");
const descartar_button = document.querySelector("#descartar");

feito_button.addEventListener('click', () => {
    let dadosIdentificacao = JSON.parse(localStorage.getItem('dadosIdentificacao'));
    let dadosDocumentacao = JSON.parse(localStorage.getItem('dadosDocumentacao'));
    let dadosAdicional = JSON.parse(localStorage.getItem('dadosAdicional'));

    var requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(dados)
    };

    // Faz a solicitação usando fetch
    fetch('arquivo1.php', requestOptions)
    .then(function(response) {
        if (!response.ok) {
            throw new Error('Ocorreu um erro ao processar a solicitação.');
        }
        return response.text();
    })
    .then(function(data) {
        // Exibe a resposta do arquivo1.php
        document.getElementById('resultado').innerHTML = data;
    })
    .catch(function(error) {
        // Trata erros, se houver
        console.error('Erro:', error);
    });
    
});

descartar_button.addEventListener('click', () => {
    localStorage.removeItem('dadosIdentificacao');
    localStorage.removeItem('dadosDocumentacao');
    localStorage.removeItem('dadosAdicional');
    window.location.href = 'index.php';  
});