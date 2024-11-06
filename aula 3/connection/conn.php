<?php
    $servidor = 'localhost';
    $banco_de_dados = 'ususarios';
    $usuario = 'root';
    $senha = '';

    $conn = new PDO("mysql:host=$servidor;dbname=$banco_de_dados", $usuario, $senha);
?>