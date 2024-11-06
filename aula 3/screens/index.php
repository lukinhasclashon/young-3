<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>
            login
        </h1>
        <form action="../db/verificar.php" method="post">
            <div>
                <label>Usuario</label>
                <input type="text" name="usuario">
            </div>
            <div>
                <label>Senha</label>
                <input type="password" name="senha">
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </main> 
</body>
</html>