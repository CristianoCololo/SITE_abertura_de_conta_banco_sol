<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require_once("./php/database_conexao.php");

    //echo "" . $_POST['email'] . "<br>" . $_POST['code'];

    $sucesso = false;

    if ($conn->connect_error) {
        echo "<p>Essa conta nao exite</p>" . $conn->connect_error . ". Fale com odesenvolvedor";
    }

    $result = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '" . $_POST['email'] . "' AND codigo = '" . $_POST['code'] . "'");

    if (!$result) {
        echo "<p>Essa conta nao existe e mais alguma coisa</p>";
    } else {
        $resultData = mysqli_fetch_assoc($result);

        if (!$resultData) {
            echo "<p>Essa conta nao exite com certeza</p>";
        } else {
            $name = $resultData['nome_do_usuario'];
            $bi = $resultData['numero_bilhete'];
            $email = $resultData['email'];
            $password = $resultData['codigo'];
            $data = $resultData['data_de_nascimento'];
            $genero = $resultData['genero'];
            $provincia = $resultData['provincia'];
            $sucesso = true;
        }
    }
    ?>

    <?php
        if ($sucesso):
    ?>

        <p>continua</p>

    <?php
        endif;
    ?>
</body>

</html>