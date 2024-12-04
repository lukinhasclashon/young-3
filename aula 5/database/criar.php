<?php
    require_once '../connection/conn.php';
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];

    $sql_codigo = "INSERT INTO clientes (nome, telefone, data, cpf, cep) VALUES ('$nome', '$telefone', '$data', '$cpf', $cep')";

    $resultado = $conn->query($sql_codigo);
    if ($resultado == TRUE){
        header('location: ../screens/index.php');
    }
    else{
        header('location: ../screens/index.php?erro');
    }
?>