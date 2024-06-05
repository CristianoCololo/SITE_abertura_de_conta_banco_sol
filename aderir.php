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
    </header>

    <main>
        <article>
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
    </main>

    

</body>

</html>