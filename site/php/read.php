<?php
    require_once("./database_conexao.php");
    

    if ($conn->connect_error) {
        die(json_encode(array("status" => "error", "message" => "Falha na conexão: " . $conn->connect_error)));
    }

    $result = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '".$_POST['email']."', codigo = '".$_POST['email']."'");

    if (!$result) {
        die(json_encode(array("status" => "error", "message" => "Erro na consulta: " . $conn->error)));
    }

    $resultData = mysqli_fetch_assoc($result);

    if (!$resultData) {
        die(json_encode(array("status" => "error", "message" => "Nenhum dado encontrado")));
    }

    $name = $resultData['nome_do_usuario'];
    $bi = $resultData['numero_bilhete'];
    $email = $resultData['email'];
    $password = $resultData['codigo'];
    $data = $resultData['data_de_nascimento'];
    $genero = $resultData['genero'];
    $provincia = $resultData['provincia'];



    $resposta = array(
        "status" => "success",
        "message" => "Dados recebidos com sucesso",
        "data" => array(
            "email" => $email,
            "bi" => $bi,
            "nome" => $name,
            "data" => $data,
            "code" => $password,
            "genero" => $genero,
            "provincia" => $provincia
        )
    );

    echo json_encode($resposta);
