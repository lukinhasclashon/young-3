<?php
    require_once '../connection/conn.php';

    $sql_codigo = "SELECT * FROM clientes";
    $resultado = $conn->query($sql_codigo);
    var_dump($resultado);
    
?>