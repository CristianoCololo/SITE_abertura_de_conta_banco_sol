import { feito, descartar } from "./elementos";

feito.addEventListener('click', () => {
    const identificacao = JSON.parse(localStorage.getItem('a_iden'));
    const documentacao = JSON.parse(localStorage.getItem('b_docu'));
    const adicional = JSON.parse(localStorage.getItem('c_adic'));

    let dados = [identificacao, documentacao, adicional];

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'create.php';

    dados.forEach(dado => {
        for (let key in dado) {
            if (dado.hasOwnProperty(key)) {
                const hiddenField = document.createElement('input');
                hiddenField.type = 'hidden';
                hiddenField.name = key; // Usar o nome da propriedade como o nome do campo
                hiddenField.value = dado[key].toString(); // Definir o valor do campo
                form.appendChild(hiddenField);
            }
        }    
    });
    
    form.style.display = "none";
    document.body.appendChild(form);
    form.submit();
});

descartar.addEventListener('click', () => {
    localStorage.clear();
    window.location.href = 'index.php';  
});