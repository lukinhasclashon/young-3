<?php
    // VARIAVEIS DE AMBIENTE
    $servidor = 'localhost';
    $banco_de_dados = 'banco_template';
    $usuario = 'root';
    $senha = '';

    // CRIA CONEXÃO COM O SERVIDOR
    $conn = new mysqli($servidor, $usuario, $senha);

    if($conn->error){
        die('Falha ao conectar no servidor ' . $conn->error);
    }

    // COMANDO PARA VERIFICAR SE O BANCO DE DADOS EXISTE
    $sql_check_db = "SHOW DATABASES LIKE '$banco_de_dados'";
    // EXECUTA O COMANDO ACIMA
    $resultado = $conn->query($sql_check_db);
    // NUMERO DE LINHAS DO COMANDO ACIMA
    $quantidade_linhas = $resultado->num_rows;
    // VERIFICAR SE HÁ O BANCO
    if($quantidade_linhas == 0){ // SE QTD DE LINHAS IGUAL 0, NÃO TEM O BD
        // COMANDO PARA CRIAR O BANCO DE DADOS
        $sql_codigo = "CREATE DATABASE $banco_de_dados";
        // EXECUTA O COMANDO ACIMA
        $criacao_banco = $conn->query($sql_codigo);

        // VERIFICA SE DEU CERTO
        if($criacao_banco){
            echo 'Banco criado com sucesso';
        }
        else{
            echo 'Erro ao criar ' . $conn->error;
        }
    }else{
        echo "Banco '$banco_de_dados' já existe";
    }
    
    // CONECTA NO BANCO DE DADOS RECEM CRIADO
    $conn->select_db($banco_de_dados);

    // CRIAR AS TABELAS
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
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(100) NOT NULL,
                marca VARCHAR(100) NOT NULL,
                tamanho VARCHAR(10) NOT NULL,
                preco DECIMAL(10, 2) NOT NULL,
                quantidade INT NOT NULL,
                id_fornecedor INT,
                FOREIGN KEY (id_fornecedor) REFERENCES fornecedores(id)
            )
        ",
        "clientes" => "
            CREATE TABLE clientes(
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(100) NOT NULL,
                telefone VARCHAR(15) NOT NULL,
                data_nascimento DATE NOT NULL,
                cpf VARCHAR(11) UNIQUE NOT NULL,
                cep VARCHAR(9) NOT NULL
            )
        ",
        "vendas" => "
            CREATE TABLE vendas(
                id INT AUTO_INCREMENT PRIMARY KEY,
                data_venda DATE NOT NULL,
                id_produto INT, 
                id_cliente INT, 
                FOREIGN KEY (id_produto) REFERENCES produtos(id),
                FOREIGN KEY (id_cliente) REFERENCES clientes(id) 
            )
        "
    ];

    // EXECUTA O COMANDO DE CRIAR PARA CADA ITEM DA LISTA TABELAS
    foreach($tabelas as $nome => $sql){
        // COMANDO SQL PARA MOSTRAR UMA TABELA EXPECIFICA
        $sql_check_table = "SHOW TABLES LIKE '$nome'";
        // EXECUTA O COMANDO ACIMA
        $resultado = $conn->query($sql_check_table);
        // QUANTIDADE DE LINHAS
        $qtd_linhas = $resultado->num_rows;
        // VERIFICA QUANTIDADE SE IGUAL A ZERO NÃO TEM A TABLEA
        if($qtd_linhas == 0){
            if ($conn->query($sql)){
                echo "Tabela '$nome' criada com sucesso<br>";
            }
            else {
                echo "Erro ao criar tabela '$nome': " . $conn->error;
            }
        }else{
            echo "Tabela '$nome' já existe!<br>";
        }
    }
?>