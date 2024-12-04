<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <main>
        <h1>cadastrar fornecedores</h1>
        <form action="../database/criar.php" method="post">
            <div>
                <label for="nome">nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="telefone">telefone</label>
                <input type="text" name="telefone" id="telefone" required>
            </div>
            <div>
                <label for="data">data</label>
                <input type="text" name="data" id="data" required>
            </div>
            <div>
                <label for="cpf">cpf</label>
                <input type="text" name="cpf" id="cpf" required>
            </div>
            <div>
                <label for="cep">cep</label>
                <input type="text" name="cep" id="cep" required>
            </div>
            <div>
                <button type="submit">cadastrar</button>
                <a href="index.php">Voltar</a>
            </div>
        </form>
    </main>
</body>
</html>