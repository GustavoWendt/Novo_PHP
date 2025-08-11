<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro funcionario</title>
    <link rel="stylesheet" href="CSS/staly_1func.css">
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
            <a href="javascript:void(0)" class="dropbtn">Pesquisar</a>
            <div class="dropdow-content">
                <a href=buscar_funcionario.php>Pesquisar cliente</a>
            </div>
        </li>
        
        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Excluir</a>
            <div class="dropdow-content">
                <a href=Excluir_funcionario.php>Excluir funcionario</a>
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
        <h1>Cadastro</h1>
        <h2>funcionario</h2>
        <!-- FORMULARIO PARA CADASTRAR UM FUNCIONARIO -->
         <form action="salvar_funcionario.php" method="POST" enctype="multipart/form-data">
            <label for="name">Nome: </label>
            <input type="text" name="nome" id="nome" required>

            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone" id="telefone" required>

            <label for="cargo">Cargo: </label>
            <input type="text" name="cargo" id="cargo" required>

            <label for="foto">Foto: </label>
            <input type="file" name="foto" id="foto" required>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>