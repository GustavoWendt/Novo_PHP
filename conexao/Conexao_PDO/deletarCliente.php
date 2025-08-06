<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
    
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="CSS/Staly.css">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

    <!-- Menu de navegação -->
    <ul>
        <li class="dropdow logo-item">
            <img src="LogoForneInjet.png" alt="Logo Fornjet">
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Voltar ao menu</a>
            <div class="dropdow-content">
                <a href="index.php">Voltar ao menu</a>
            </div>
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Cadastrar</a>
            <div class="dropdow-content">
                <a href="InserirCliente.php">Cadastrar cliente</a>
            </div>
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Pesquisar</a>
            <div class="dropdow-content">
                <a href="pesquisarCliente.php">Pesquisar cliente</a>
            </div>
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Alterar</a>
            <div class="dropdow-content">
                <a href="atualizarCliente.php">Alterar cliente</a>
            </div>
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Listar clientes</a>
            <div class="dropdow-content">
                <a href="Listar_Clientes.php">Listar clientes</a>
            </div>
        </li>
    </ul>

    <!-- Conteúdo principal -->
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-4 py-4 shadow-sm" style="width: 100%; max-width: 500px;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Excluir Cliente</h5>
                <p class="text-muted text-center mb-4">Por favor, forneça o ID do cliente que deseja excluir.</p>

                <form action="processarDelecao.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="id" class="form-label">ID do Cliente</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Digite o ID" required>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Confirmar Exclusão</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
