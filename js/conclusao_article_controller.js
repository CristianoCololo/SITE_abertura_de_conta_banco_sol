import { feito, descartar } from "./elementos";

feito.addEventListener('click', () => {
    const identificacao = JSON.parse(localStorage.getItem('a_iden'));
    //const documentacao = JSON.parse(localStorage.getItem('b_docu'));
    //const adicional = JSON.parse(localStorage.getItem('c_adic'));

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'create.php';

    const hiddenField = document.createElement('input');
    hiddenField.type = 'hidden';
    hiddenField.name = 'username';
    hiddenField.value = identificacao.username.toString();
    form.appendChild(hiddenField);

    form.style.display = "none";
    document.body.appendChild(form);
    form.submit();
    
});

descartar.addEventListener('click', () => {
    localStorage.clear();
    window.location.href = 'index.php';  
});