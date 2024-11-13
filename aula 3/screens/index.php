<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-secondary">
    <main class="card p-4 shadow-lg text-center">
        <h1 class="text-uppercase">
            login
        </h1>
        <form class="d-flex flex-column justify-content-center align-items-cente gap-3" action="../db/verificar.php" method="post">
            <div>
                <label class="form-label">Usuario</label>
                <input class="form-control" type="text" name="usuario">
            </div>
            <div>
                <label>Senha</label>
                <input class="form-control" type="password" name="senha">
            </div>
            <div class="w-100">
                <button class="btn btn-dark w-100" type="submit">Enviar</button>
            </div>
        </form>
    </main> 
</body>
</html>