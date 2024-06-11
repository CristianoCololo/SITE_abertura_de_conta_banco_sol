<?php
if (isset($_POST["article"])) {
    $articles_posted = $_POST["article"];
} else {
    $articles_posted = "identificacao";
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aderir::<?php echo $articles_posted ?></title>
    <link rel="stylesheet" href="assets/css/fontes.css">
    <link rel="stylesheet" href="assets/css/destyle.css">
    <link rel="stylesheet" href="assets/css/entrar_style.css">
</head>

<body>
    <div class="notificacao">
        <p>Esse numero de telefone nao e valido meu brother</p>
        <button>OK</button>
    </div>
    <header>
        <nav>
            <ul>
                <li onclick="goto('index.php')">Principal</li>
                <li onclick="goto('entrar.php')">Entrar</li>
                <li onclick="goto('aderir.php')">Aderir</li>
                <li onclick="goto('index.php')">Ajuda</li>
                <li onclick="goto('index.php')">Sobre</li>
            </ul>
        </nav>
    </header>

    <main>

        <article>
            <div class="form">
                <div class="input_email_div">
                    <label>EMAIL</label>
                    <input type="email" id="email">
                </div>
                <div class="input_password_div">
                    <label>PASSWORD </label>
                    <input type="password" maxlength="6" id="password">
                </div>

            </div>
            <div class="buttons">
                <button id="entrar">Entrar</button>
            </div>
            <p>Se ainda nao tem uma conta, clique <a href="aderir.php">aqui</a> para aderir</p>
        </article>
    </main>
    <script>
        function goto(params) {
            window.location.href = params;
        }
    </script>
    <script src="js/entrar.js"></script>
    <script type="module" src="js/utils.js"></script>
    <script type="module" src="js/sendForm.js"></script>
    <script type="module" src="js/elementos.js"></script>
    <script type="module" src="js/<?php echo $articles_posted ?>_article_controller.js"></script>
</body>

</html>