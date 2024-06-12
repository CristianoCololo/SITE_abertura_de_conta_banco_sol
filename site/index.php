<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/fontes.css">
    <link rel="stylesheet" href="./assets/css/destyle.css">
    <link rel="stylesheet" href="./assets/css/index_style.css">
    <title>Sol::CriarContaOnline</title>
</head>
<body>
    <div class="page">
    <header>
        <nav>
            <ul>
                <li onclick="goto('index.php')">Home</li>
                <li onclick="goto('entrar.php')">Login</li>
                <li onclick="goto('aderir.php')">Sign Up</li>
                <li onclick="goto('index.php')">About</li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="left_content">
            <p>Bem-vindo ao nosso portal de abertura de contas online, aqui,
                você pode abrir sua conta de maneira rápida, fácil,
                sem enfrentar filas e sem burocracia, tudo a partir do conforto
                da sua casa. </p>
            <p>Adira Ja</p>
            <button id="aderir">Aderir</button>
        </div>
    </main>
    </div>
    
    <footer>
        <div>
            <h4>Contacto</h4>
            <ul>
                <li>Facebook: </li>
                <li>Telefone: </li>
                <li>Github: </li>
            </ul>
        </div>
        <div>
            <h4>Autores</h4>
            <ul>
                <li>Cristiano Cololo</li>
                <li>Fernando Vunge</li>
                <li>Josmer Ramiro</li>
                <li>Manuel Tutu</li>
            </ul>
        </div>
        <div>
            <h4>Tecnologias usadas</h4>
            <ul>
                <li>HTML 5</li>
                <li>CSS 3</li>
                <li>JavaScript</li>
                <li>PHP 8</li>
                <li>MySql</li>
            </ul>
        </div>
    </footer>
    <script>
        function goto(params) {
            window.location.href = params;
        }
        const aderir = document.getElementById('aderir');
        aderir.addEventListener('click', ()=>{
            window.location.href = 'aderir.php';
        })
    </script>
</body>

</html>