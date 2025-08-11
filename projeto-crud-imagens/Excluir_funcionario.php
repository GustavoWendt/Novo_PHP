<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro funcionario</title>
    <link rel="stylesheet" href="CSS/staly_excluir_func1.css">
    <link rel="stylesheet" type="text/css" href="CSS/Staly.css">
</head>
<body>
    <ul>

        <li class="dropdow logo-item">
            <img src="LogoForneInjet.png" alt="Logo Fornjet" height="60" width="60">
        </li>
        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Voltar ao menu</a>
            <div class="dropdow-content">
                <a href=index.php>Voltar ao menu</a>
            </div>
        </li>
        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Cadastrar</a>
            <div class="dropdow-content">
                <a href=cadastrar_funcionario.php>Cadastrar cliente</a>
            </div>
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Pesquisar</a>
            <div class="dropdow-content">
                <a href=buscar_funcionario.php>Pesquisar cliente</a>
            </div>
        </li>

                <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Alterar</a>
            <div class="dropdow-content">
                <a href=Alterar_funcionario.php>Alterar Cliente</a>
            </div>
        </li>
    </ul>
    <div class="container">
        <h1>Excluir</h1>
        <h2>funcionario</h2>
        <form method="GET" action="Excluir_funcionario_backend.php">
            <label>Digite o ID para excluir:</label>
            <input type="text" name="id" required>
            <button type="submit">Buscar</button>
        </form>

    </div>
</body>
</html>