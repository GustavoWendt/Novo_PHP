<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro funcionario</title>
    <link rel="stylesheet" href="CSS/staly_buscar_func.css">
</head>
<body>
    <div class="container">
        <h1>Busca</h1>
        <h2>funcionario</h2>
        <form method="GET" action="buscar_funcionario_backend.php">
            <label>Pesquisar por ID ou Nome:</label>
            <input type="text" name="busca" required>
            <button type="submit">Buscar</button>
        </form>

    </div>
</body>
</html>