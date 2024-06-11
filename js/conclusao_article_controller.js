import { feito, descartar } from "./elementos";

feito.addEventListener('click', () => {
    const identificacao = JSON.parse(localStorage.getItem('a_iden'));
    //const documentacao = JSON.parse(localStorage.getItem('b_docu'));
    //const adicional = JSON.parse(localStorage.getItem('c_adic'));

    fetch('../create.php', {
        method: 'POST',
        body: JSON.stringify({
            username: identificacao.username.toString(),
            email: identificacao.email.toString(),
        }),
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => console.log(data))
    .catch((error) => console.error('Erro:', error));
    
});

descartar.addEventListener('click', () => {
    localStorage.clear();
    window.location.href = 'index.php';  
});