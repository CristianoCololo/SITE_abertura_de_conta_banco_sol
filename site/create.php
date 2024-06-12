<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/fontes.css">
    <title>Feito</title>
    <style>
        p{
            margin: 50px 0;
            text-align: center;
            font-family: 'Ub';
            font-size: 1.5em;
        }
        div.buttons{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 50px;
            display: flex;
            gap: 25px;
            flex-direction: row;
        }
        div.buttons button{
            flex-grow: 1;
            background-color: #FFC800;
            font-family: 'Ub';
            color: #fff;
            text-align: center;        
            padding: 20px 40px;
            width: 200px;
            border-radius: 15px;
            font-size: 1.2em;
            border: none;
        }   
        
    </style>
</head>
<body>
    <?php
    if (isset($_POST['email'])) {
        require_once('./php/database_conexao.php');

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
    <?php if (isset($_POST["email"])) : ?>
        <main>
            <p>Sucesso. Agora volte a pagina inicial</p>
            <div class="buttons">
                <button id="index">Pagina Inicial</button>
                <button id="entrar">Entrar</button>
            </div>
        </main>
        <script>
            document.getElementById('index').addEventListener('click', () => {
                localStorage.clear(); 
                window.location.href = 'index.php'    
            });
            document.getElementById('entrar').addEventListener('click', () => {
                localStorage.clear(); 
                window.location.href = 'entrar.php'    
            });
        </script>
    <?php else:?>
        <script> 
            localStorage.clear(); 
            window.location.href = 'index.php'
        </script>
    <?php endif ?>
    
</body>

</html>