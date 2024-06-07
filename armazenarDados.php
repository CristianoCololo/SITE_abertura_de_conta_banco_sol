<?php
header('Content-Type: application/json');
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	if ($_POST['submit'] == "<code.") {
		$name = mysqli_real_escape_string($mysqli, $_POST['nome_do_usuario']);
		$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		$code = mysqli_real_escape_string($mysqli, $_POST['codigo']);

		$bi = mysqli_real_escape_string($mysqli, $_POST['numero_bilhete']);
		
		$date = mysqli_real_escape_string($mysqli, $_POST['data_de_nascimento']);
		$gender = mysqli_real_escape_string($mysqli, $_POST['genero']);
		$province = mysqli_real_escape_string($mysqli, $_POST['provincia']);
		
		
		$result = mysqli_query($mysqli, "INSERT INTO `usuario` ( `email`, `numero_biblhete`, `nome_do_usuario`, `data_de_nascimento`, `codigo`, `genero`, `provincia`) VALUES ('".$email."', '".$bi."', '".$name."', '".$date."', '".$code."', '".$gender."', '".$province."');");	
	}		
}

?>
</body>
</html>
