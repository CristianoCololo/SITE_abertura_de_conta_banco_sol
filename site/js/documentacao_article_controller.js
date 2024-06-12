import { mostrarNotificacao } from "./utils";
import { sendForm } from "./sendForm";
import { avancar, voltar } from "./elementos";

voltar.addEventListener('click', () => {
    (localStorage.getItem('b_docu')) ? localStorage.removeItem('b_docu') : console.log() ;
    (localStorage.getItem('a_iden')) ? localStorage.removeItem('a_iden') : console.log() ;
    sendForm('POST','aderir.php','article','identificacao');
});

avancar.addEventListener('click', () => {
    let processo = processarDocumentacao();
    if (processo.sucesso) {
        localStorage.setItem('b_docu', JSON.stringify(processo.dados));
        sendForm('POST','aderir.php','article','adicional');
    } else {
        mostrarNotificacao(processo.info);
    }

});

function processarDocumentacao() {

    const fotoInput = document.getElementById("foto_perfil");
    const numero_bi = document.getElementById("numero_bi").value;
    
    if (numero_bi === '') {
        return { 
            sucesso: false, 
            info: "Numero de bi nao pode estar vazio",
            dados: null,
        };
    }
    if (!((/^\d{9}[A-Z]{2}\d{3}$/).test(numero_bi))) {
        return { 
            sucesso: false, 
            info: "Este nao e um numero de BI Angolano valido",
            dados: null,
        };
    }
    return { 
        sucesso: true, 
        info: "",
        dados: {
            bi : numero_bi,
        },
    };;
}
