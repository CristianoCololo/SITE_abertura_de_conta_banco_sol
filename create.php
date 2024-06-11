<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feito</title>
</head>
<body>
    <?php
    if (isset($_POST['']) && $_POST['']) {
        $servername = "localhost";
        $database = "sol";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $sql = "INSERT INTO usuario (email, numero_bilhete, nome_do_usuario, data_de_nascimento, codigo, genero, provincia) VALUES ('" . $_POST['email'] . "', '" . $_POST['bi'] . "', '" . $_POST['username'] . "', '" . $_POST['data'] . "', '" . $_POST['password'] . "', '" . $_POST['genero'] . "', '" . $_POST['provincia'] . "')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>
    <?php if (isset($_POST["submit"]) && $_POST['submit'] == '<code.') : ?>
        <main>
            <p>Sucesso. Agora volte a pagina inicial</p>
            <div class="buttons">
                <button id="index">Pagina Inicial</button>
                <button id="entrar">Entrar</button>
            </div>
        </main>
    <?php else:?>
    
    <?php endif ?>
    
</body>

</html>