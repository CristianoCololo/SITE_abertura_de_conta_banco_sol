<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/fontes.css">
    <link rel="stylesheet" href="./assets/css/index_style.css">
    <title>Sol::CriarContaOnline</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>Principal</li>
                <li>Entrar</li>
                <li>Aderir</li>
                <li>Ajuda</li>
                <li>Sobre</li>
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
        <div class="right_content">
            <img src="./assets/img/main.png" alt="">
        </div>
    </main>
    <footer></footer>
    <script>
        const aderir = document.getElementById('aderir');
        aderir.addEventListener('click', ()=>{
            window.location.href = 'aderir.php';
        })
    </script>
</body>

</html>