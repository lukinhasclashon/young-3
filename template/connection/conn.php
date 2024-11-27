<?php
$servidor = 'localhost';
$banco_de_dados = 'loja_naiquie';
$usuario = 'root';
$senha = '';

$conn = new mysqli($servidor, $usuario, $senha);

$sql_check_db = "SHOW DATABASES LIKE '$banco_de_dados'";

$resultado = $conn->query($sql_check_db);

if($resutado->num_rows == 0){
    $sql_codigo = "CREATE DATABASE $banco_de_dados";
    if($conn->query($sql_codigo) === TRUE){
        echo 'Banco criado com sucesso';
    }
    else{
        die('Erro ao criar'. $conn->error);
    }
}else{
    echo 'Banco de dados já existe';
}

$conn->select_db($banco_de_dados);

$tabelas = [
    "fornecedores" => "
       CREATE TABLE fornecedores(
         id INT AUTO_INCREMENT PRIMARY KEY,
         nome VARCHAR(100) NOT NULL,
         cidade VARCHAR(50) NOT NULL
        )
    ",
    "produtos" => "
        CREATE TABLE produtos(
            id INT AUTO INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            marca VARCHAR(50) NOT NULL,
            tamanho VARCHAR(10) NOT NULL,
            preco DECIMAL(10, 2) NOT NULL,
            quantidade INT NOT NULL,
            id_fornecedor INT,
            FOREIGIN KEY (id_fornecedor) REFERENCES fornecedores(id)
        )
    ",
    "usuarios" => "
        CREATE TABLE usuarios(
            id INT AUTO INCREMENT PRIMARY KEY,
            nome VARCHAR(100) NOT NULL,
            telefone VARCHAR(15) NOT NULL,
            data_nascimente DTE NOT NULL,
            cpf VARCHAR(11) UNIQUE NOT NULL,
            cep VARCHAR(9) NOT NULL
        )
    ",
    "vendas" => "
        CREATE TABLE vendas(
            id INT AUTO INCREMENT PRIMARY KEY,
            data_venda DATE NOT NULL,
            id_produto INT,
            id_usuario INT,
            FOREIGN KEY (id_produto) REFERENCES produtos(id),
            FOREIGN KEY (id_usuario) REFERENCES produtos(id)
        )
    "
    ];

    foreach($tabelas as $nome => $sql){
        $sql_check_table = "SHOW TABLES LIKE '$nome'";
        $resultado = $conn -> qury($sql_check_table);

        if ($resultado->num_rows == 0){
            if ($conn->query($sql) === TRUE){
                echo "tabela '$nome' criada com sucesso"; 
            }
            else{
                echo "Erro ao criar tabela'$nome': ".$conn->error;
            }
        }else {
            echo "tabela '$nome" já existe!";
            }
    }
?>
