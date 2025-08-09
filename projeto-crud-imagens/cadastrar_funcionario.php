<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro funcionario</title>
    <link rel="stylesheet" href="CSS/staly_func.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro</h1>
        <h2>funcionario</h2>
        <!-- FORMULARIO PARA CADASTRAR UM FUNCIONARIO -->
         <form action="salvar_funcionario.php" method="POST" enctype="multipart/form-data">
            <label for="name">Nome: </label><br>
            <input type="text" name="nome" id="nome" required>
            <br>

            <label for="telefone">Telefone: </label><br>
            <input type="text" name="telefone" id="telefone" required>
            <br>

            <label for="foto">Foto: </label><br>
            <input type="file" name="foto" id="foto" required><br>
            <br>
            
            <button type="submit">Cadastrar</button><br>
        </form>
    </div>
</body>
</html>