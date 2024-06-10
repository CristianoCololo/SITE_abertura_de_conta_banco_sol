function sendForm(method, action, key, value) {
    const form = document.createElement('form');
    form.method = method;
    form.action = action;

    const hiddenField = document.createElement('input');
    hiddenField.type = 'hidden';
    hiddenField.name = key;
    hiddenField.value = value;
    form.appendChild(hiddenField);

    form.style.display = "none";
    document.body.appendChild(form);
    form.submit();

}