<?php 
    require_once'../connection/conn.php';

    $id = $_GET['id'];
    $sql_codigo = "SELECT * FROM clientes WHERE id='$id'";
    $resultado = $conn->query($sql_codigo);
    $infos = $resultado->fetch_assoc();
    $nome =  $infos['nome'];
    $telefone = $infos['telefone'];
    $data =  $infos['data'];
    $cpf = $infos['cpf'];
    $cep = $infos['cep'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <main>
        <h1>Editar Cliente</h1>
        <form action="../database/editar.php" method="post">
            <input type="text" value="<?php echo $id ?>" hidden>
            <div>
                <label for="nome">nome</label>
                <input type="text" value="<?php echo $nome ?>">
            </div>
            <div>
                <label for="telefone">telefone</label>
                <input type="text" value="<?php echo $telefone ?>">
            </div>
            <div>
                <label for="data_nascimento">data_nascimento</label>
                <input type="text" value="<?php echo $data_nascimento ?>">
            </div>
            <div>
                <label for="cpf">cpf</label>
                <input type="text" value="<?php echo $cpf ?>">
            </div>
            <div>
                <label for="cep">cep</label>
                <input type="text" value="<?php echo $cep ?>">
            </div>
            <div>
                <button type="submit">Enviar</button>
                <a href="index.php">Voltar</a>
            </div>
        </form>
    </main>
</body>
</html>