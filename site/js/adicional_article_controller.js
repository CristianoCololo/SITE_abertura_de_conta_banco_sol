import { mostrarNotificacao } from "./utils";
import { sendForm } from "./sendForm";
import { avancar, voltar } from "./elementos";


voltar.addEventListener('click', () => {
    (localStorage.getItem('c_adic')) ? localStorage.removeItem('c_adic') : console.log();
    sendForm('POST', 'aderir.php', 'article', 'documentacao');
});

avancar.addEventListener('click', () => {
    let processo = processarAdicional();
    if (processo.sucesso) {
        localStorage.setItem('c_adic', JSON.stringify(processo.dados));
        sendForm('POST', 'aderir.php', 'article', 'conclusao');
    } else {
        mostrarNotificacao(processo.info);
    }

});

function processarAdicional() {
    const data_de_nascimento = document.getElementById("data_nascimento").value;
    const genero = document.getElementById("genero_choice").value;
    const provincia = document.getElementById("provincia").value;


    if (!data_de_nascimento) {
        return {
            sucesso: false,
            info: "A data nao pode estar vazia",
            dados: null,
        };
    }
    const data_object = new Date(data_de_nascimento);

    if (2024 - parseInt(data_object.getFullYear()) < 18) {
        return {
            sucesso: false,
            info: "Tem que ser maior de idade  para criar uma conta online",
            dados: null,
        };
    }
    return {
        sucesso: true,
        info: "",
        dados: {
            data: (data_object.getFullYear().toString() + "-" + data_object.getMonth().toString() + "-" + data_object.getDay().toString()),
            genero: genero,
            provincia: provincia,
        },
    };
}