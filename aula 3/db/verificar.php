<?php
    require '../connection/conn.php';
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $codigo_sql = "SELECT * FROM teste WHERE usuario='$usuario' AND senha='$senha'";
    $x =$conn->prepare($codigo_sql);
    var_dump($x);
?>