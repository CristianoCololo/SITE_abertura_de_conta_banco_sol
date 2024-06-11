<?php

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

$dados = json_decode(file_get_contents("php://input"), true);


$query = "INSERT INTO nome_da_tabela (campo1, campo2) VALUES (?, ?)";
$instrucao = $conexao->prepare($query);

$instrucao->bind_param("ss", $dados['campo1'], $dados['campo2']);
$instrucao->execute();

if ($instrucao->affected_rows > 0) {
    $resposta = array('status' => 'sucesso', 'mensagem' => 'Dados inseridos com sucesso.');
} else {
    $resposta = array('status' => 'erro', 'mensagem' => 'Falha ao inserir dados.');
}

$instrucao->close();
$conexao->close();

header('Content-Type: application/json');
echo json_encode($resposta);
?>
