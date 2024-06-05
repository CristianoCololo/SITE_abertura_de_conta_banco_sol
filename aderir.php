<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <label>NOME DE USUARIO</label><br>
                <input type="name" required><br><br><br>

                <label>EMAIL</label><br>
                <input type="email" required><br><br><br>


                <label>PASSWORD </label><br>
                <input type="password" inputmode="numeric" pattern="[0-9]*" maxlength="4" required> <br><br><br>

                <label>CONFIRMAR PASSWORD</label><br>
                <input type="password" inputmode="numeric" pattern="[0-9]*" maxlength="4" required><br><br><br>
            </div>
            <div class="buttons">
                <input type="submit" value="Voltar">
                <input type="submit" value="Avançar">
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