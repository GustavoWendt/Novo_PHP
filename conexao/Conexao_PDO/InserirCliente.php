<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Cadastro de Clientes</title>

    <!-- Estilos -->
    <link rel="stylesheet" href="CSS/Staly.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>
<body>

    <!-- Menu de Navegação -->
    <ul>
        <li class="dropdow logo-item">
            <img src="LogoForneInjet.png" alt="Logo Fornjet" height="60" width="60" />
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Voltar ao menu</a>
            <div class="dropdow-content">
                <a href="index.php">Voltar ao menu</a>
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
            <a href="javascript:void(0)" class="dropbtn">Excluir</a>
            <div class="dropdow-content">
                <a href="deletarCliente.php">Excluir cliente</a>
            </div>
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Buscar</a>
            <div class="dropdow-content">
                <a href="buscarCliente.php">Buscar Cliente</a>
            </div>
        </li>

        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Listar clientes</a>
            <div class="dropdow-content">
                <a href="Listar_Clientes.php">Listar clientes</a>
            </div>
        </li>
    </ul>

    <!-- Formulário de Cadastro -->
    <form action="processarinsercao.php" method="POST">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="card px-3 py-4 shadow-sm" style="width: 100%; max-width: 550px;">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Cadastro de Cliente</h5>

                    <!-- Opções de Ação -->
                    <div class="mb-3 text-center">
                    </div>

                    <p class="text-muted text-center mb-4">Por favor, forneça as seguintes informações para realizar o cadastro</p>

                    <!-- Campos do Formulário -->
                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Nome" id="nome" name="nome" required />
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Endereço" id="endereco" name="endereco" required />
                    </div>

                    <div class="mb-3">
                        <input class="form-control" type="text" placeholder="Celular" id="telefone" name="telefone" required />
                    </div>

                    <div class="mb-4">
                        <input class="form-control" type="email" placeholder="E-mail" id="email" name="email" required />
                    </div>

                    <!-- Termos e Condições -->
                    <div class="text-center mb-3">
                        <small class="text-muted">Ao se cadastrar, você concorda com os</small><br />
                        <a href="#" class="terms">Termos e Condições</a>
                    </div>

                    <!-- Botão -->
                    <button class="btn btn-success w-100" type="submit">Confirmar</button>
                </div>
            </div>
        </div>
    </form>

</body>
</html>
