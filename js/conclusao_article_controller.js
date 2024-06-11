const feito_button = document.querySelector("#feito");
const descartar_button = document.querySelector("#descartar");

feito_button.addEventListener('click', () => {
    let dadosIdentificacao = JSON.parse(localStorage.getItem('dadosIdentificacao'));
    let dadosDocumentacao = JSON.parse(localStorage.getItem('dadosDocumentacao'));
    let dadosAdicional = JSON.parse(localStorage.getItem('dadosAdicional'));

    

    let dados_para_guardar = {
        'nome_do_usuario' : dadosIdentificacao['username'],
        'email': dadosIdentificacao['email'],
        'codigo': dadosIdentificacao['password'],
        'numero_bilhete': dadosDocumentacao['bi'],
        //'genero': dadosAdicional['genero'],
        //'provincia': dadosAdicional['provincia'],
        'submit' :  "<code."
    }

    let result;

    var requestOptions = {
        method: 'POST',
        headers: {'Content-Type': 'application/json'},
        body: JSON.stringify(dados_para_guardar)
    };

    fetch('armazenarDados.php', requestOptions)
    .then(function(response) {
        if (!response.ok) {
            throw new Error('Ocorreu um erro ao processar a solicitação.');
        }
        return response.text();
    })
    .then(function(data) {
        console.log(data);
    })
    .catch(function(error) {
        console.error('Erro:', error);
    });

});

descartar_button.addEventListener('click', () => {
    localStorage.clear();
    window.location.href = 'index.php';  
});