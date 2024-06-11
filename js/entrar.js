
const entrarButton = document.getElementById("entrar");
const email = document.getElementById("email");
const code = document.getElementById("password");


entrarButton.addEventListener('click', () => {
    
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = 'perfil.php';

    data = {
        email : email.value,
        code : password.value
    }

    for (let key in data) {
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
});