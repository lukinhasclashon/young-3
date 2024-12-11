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
                        $id = $item[0];
                        $nome = $item[1];
                        $telefone = $item[2];
                        $data = $item[3];
                        $cpf = $item[4];
                        $cep = $item[5];
                        echo '<tr>
                            <td> '.$nome.' </td>
                            <td> '.$telefone.' </td>
                            <td> '.$data.' </td>
                            <td> '.$cpf.' </td>
                            <td> '.$cep.' </td>
                            <td><a href="formulario_editar.php">Editar?id='.$id.'</a> | <a href="">Deletar</a></td>
                        </tr>';
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
