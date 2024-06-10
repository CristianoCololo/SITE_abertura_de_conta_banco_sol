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
    <nav>
        <form action="" method="post">
            
        </form>
    </nav>
    <header>
        <h1>BANCO SOL</h1>
        <span>Abertura de Conta no Banco Sol Online</span>
    </header>

    <div class="form">
        <div class="email_div">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="passcode_div">
            <label for="username">Codigo Passe</label>   
            <input type="password" id="password" name="code" inputmode="numeric" pattern="[0-9]*" maxlength="6">
        </div>
        
        <input type="submit" value="Entrar" id="buttonEntrar" >
        <form action="aderir.php" method="post">
        <input type="hidden" name="article" value="identificacao">
        <input type="submit" value="Aderir" id="buttonAderir">
    </form>

      <footer style="footer:
	width:876px;
	height:14px;
	padding:10px;
	background-color:yellow; 
	font-family:Trebuchet MS, Arial, Helvetica, sans-serif;
	font-size:12px;
	clear:both;
	text-align:center;">
        BANCOL SOL
      </footer>
    </div>

    
      
      
        
    
    
    
    
    <script src="js/index_controller.js"></script>    
</body>
</html>