<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>BANCO SOL</h1>
        <span id="subtitulo"> Abertura de Conta no Banco Sol Online</span>
        <span>Para iniciar o processo de abertura de conta online, precisamos que preenchas o formuário a baixo com os seus dados pessoais.
        </span>
        <div class="progress">
            <ul>
                <li>Indetificao</li>
                <li>Documentos</li>
                <li>Dados Adicionais</li>
                <li>Concluindo</li>
            </ul>
        </div>
    </header>
    
    <main>
        <article class="indetificao">
            <div class="form">
                <div class="input_username_div">
                    <label>NOME DE USUARIO</label>
                    <input type="name" required>
                </div>
                <div class="input_email_div">
                    <label>EMAIL</label>
                    <input type="email" required>
                </div>
                <div class="input_password_div">
                    <label>PASSWORD </label>
                    <input type="password" inputmode="numeric" pattern="[0-9]*" maxlength="4" required>
                </div>
                <div class="input_confirm_password_div">
                    <label>CONFIRMAR PASSWORD</label>
                    <input type="password" inputmode="numeric" pattern="[0-9]*" maxlength="4" required>    
                </div>
            </div>
            <div class="buttons">
                <button>Voltar</button>
                <button>Avançar</button>
            </div>
        </article>
        <article class="documetos">
            <div>
                <label>A SUA FOTO</label>
                <input type="file" required><br>

                <label>O DOCUMENTO FRONTAL E VERÇO DO SEU BI</label>
                <input type="file" required><br>
            </div>
            <div class="buttons">
                <input type="submit" value="Limpar">
                <input type="submit" value="Validar">
            </div>
        </article>
        <article class="adicionais">
            <div>
                <label>DATA DE NASCIMENTO</label>
                <input type="date" required><br>

                <label>Genero:</label><br>
                <input type="radio" id="m" name="m"><br>
                <label>Masculino</label><br>
                <input type="radio" id="f" name="f"><br>
                <label>Feminino</label><br>

                <label>NUMERO DO DOCUMENTO BI</label>
                <input type="text" required><br>
            </div>
            <div class="buttons">
                <input type="submit" value="Limpar">
                <input type="submit" value="Validar">
            </div>
        </article>
        <article class="conclusao">

        </article>
    </main>



</body>

</html>