<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontes.css">
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/index_style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>BANCO SOL</h1>
        <span>Abertura de Conta no Banco Sol Online</span>
    </header>

    <div class="form">
        <div class="username_div">
            <label for="username">Nome de Usuario</label>
            <input type="text" id="username" name="username">
        </div>

        <div class="passcode_div">
            <label for="username">Codigo Passe</label>   
            <input type="password" id="passwolrd" name="code" inputmode="numeric" pattern="[0-9]*" maxlength="4">
        </div>
        
        <input type="submit" value="Entrar" id="buttonEntrar" >
</div>

    <form action="aderir.php" method="post">
        <input type="hidden" name="article" value="indetificacao">
        <input type="submit" value="Aderir" id="buttonAderir">
    </form>
    
    
    
    <script src="js/index_controller.js"></script>    
</body>
</html>