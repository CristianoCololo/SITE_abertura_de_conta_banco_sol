const div_notificacao = document.querySelector('.notificacao');
const notificacao = document.querySelector('.notificacao p');
const botao_ok = document.querySelector('.notificacao button');

function mostrarNotificacao(info) {
    div_notificacao.style.display = 'flex';
    notificacao.innerHTML = info;
}

function esconderNotificacao() {
    div_notificacao.style.display = 'none';
    notificacao.innerHTML = '';
}

botao_ok.addEventListener('click', esconderNotificacao);

export { mostrarNotificacao };
