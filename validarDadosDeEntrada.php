<?php
header('Content-Type: application/json');

require_once("dbConnection.php");

// Verifica a conexão com o banco de dados  action="validarDadosDeEntrada.php" method="post"
if ($mysqli->connect_error) {
    die(json_encode(array("status" => "error", "message" => "Falha na conexão: " . $mysqli->connect_error)));
}

$result = mysqli_query($mysqli, "SELECT * FROM usuario WHERE id = 1");

if (!$result) {
    die(json_encode(array("status" => "error", "message" => "Erro na consulta: " . $mysqli->error)));
    
}

$resultData = mysqli_fetch_assoc($result);

if (!$resultData) {
    die(json_encode(array("status" => "error", "message" => "Nenhum dado encontrado")));
    
}

$name = $resultData['nome_do_usuario'];
$code = $resultData['codigo'];


$resposta = array(
    "status" => "success",
    "message" => "Dados recebidos com sucesso",
    "data" => array(
        "nome" => $name,
        "code" => $code
    )
);

echo json_encode($resposta);

?>