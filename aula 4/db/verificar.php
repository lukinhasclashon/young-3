<?php
    require '../connection/conn.php';
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $codigo_sql = "SELECT * FROM teste WHERE usuario='$usuario' AND senha='$senha'";

    $sql_query = $conn -> query($codigo_sql);

    $quantidade_linhas = $sql_query->num_rows;
    
    if ($quantidade_linhas == 1){
        header('location: ../screens/painel.php');
    }
?>