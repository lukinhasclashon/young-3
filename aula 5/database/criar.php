<?php
    require_once '../connection/conn.php';
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];

    $sql_codigo = "INSERT INTO clientes (nome, telefone, data_nascimento, cpf, cep) VALUES ('$nome', '$telefone', '$data', '$cpf', $cep')";
   var_dump($sql_codigo);
    $resultado = $conn->query($sql_codigo);
    var_dump($resultado);
    // if ($resultado == TRUE){
    //     header('location: ../screens/index.php');
    // }
    // else{
    //     header('location: ../screens/index.php?erro');
    // }
?>