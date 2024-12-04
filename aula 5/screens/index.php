<?php
    require_once '../connection/conn.php';

    $sql_codigo = "SELECT * FROM clientes";
    $resultado = $conn->query($sql_codigo);
    $quantidade_linhas = $resultado->num_rows;

    if ($quantidade_linhas > 0){
        $informacoes = $resultado->fetch_all();
    }
    else{
        $informacoes = [];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body>
    <main>
        <h1>fornecedores</h1>
        <table>
            <tr>
                <th>nome</th>
                <th>telefone</th>
                <th>data</th>
                <th>cpf</th>
                <th>cep</th>
                <th>ações</th>
            </tr>
            <?php 
                if (count($informacoes) == 0){
                    echo'<tr>
                            <td colspan="6">Nenhum registro</td>
                        </tr>';
                }
                else{
                    foreach($informacoes as $item){
                        var_dump($item);
                    }
                }
            ?>
            <tr>
                <td colspan="6"> <a href="formulario.php">cadastrar</a> </td>
            </tr>
        </table>    
    </main>
</body>
</html>