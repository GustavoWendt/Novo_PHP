<?php
require_once 'Conexao.php';

$conexao = conectarBanco();

$idCliente = $_GET['id'] ?? null;
$cliente = null;
$msgErro = "";

function buscarClientePorId($idCliente, $conexao) {
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente1 WHERE id_cliente = :id");
    $stmt->bindParam(":id", $idCliente, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($idCliente && is_numeric($idCliente)) {
    $cliente = buscarClientePorId($idCliente, $conexao);

    if (!$cliente) {
        $msgErro = "Erro: Cliente não encontrado.";
    }
} else {
    $msgErro = "Digite o ID do cliente para buscar os dados.";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" type="text/css" href="CSS/Staly.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 80px 20px 20px 20px;
            background: #f5f5f5;
            color: #333;
        }
        h2 {
            margin-bottom: 25px;
        }
        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            max-width: 450px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 9px 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus {
            border-color: #60A5FA;
            outline: none;
            background-color: #f0f8ff;
        }
        input[readonly] {
            background-color: #e9ecef;
            cursor: pointer;
        }
        button {
            margin-top: 25px;
            background-color: #2563EB;
            color: white;
            border: none;
            padding: 12px 0;
            width: 100%;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1D4ED8;
        }
        p.error-msg {
            color: #D32F2F;
            font-weight: 600;
            margin-bottom: 20px;
        }
        /* Mantém menu dropdown original */
        ul {
            margin: 0; 
            padding: 0;
        }
    </style>
    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>
</head>
<body>
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

    <h2>Atualizar Cliente</h2>

    <?php if ($msgErro): ?>
        <p class="error-msg"><?= htmlspecialchars($msgErro) ?></p>
        <form action="atualizarCliente.php" method="GET" style="max-width: 300px;">
            <label for="id">Id do Cliente:</label>
            <input type="number" id="id" name="id" required />
            <button type="submit">Buscar</button>
        </form>
    <?php else: ?>
        <form action="processarAtualizacao.php" method="POST">
            <input type="hidden" name="id_cliente" value="<?= htmlspecialchars($cliente["id_cliente"]) ?>" />

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($cliente['nome']) ?>" readonly onclick="habilitarEdicao('nome')" />

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" value="<?= htmlspecialchars($cliente['endereco']) ?>" readonly onclick="habilitarEdicao('endereco')" />

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente['telefone']) ?>" readonly onclick="habilitarEdicao('telefone')" />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($cliente['email']) ?>" readonly onclick="habilitarEdicao('email')" />

            <button type="submit">Atualizar Cliente</button>
        </form>
    <?php endif; ?>
</body>
</html>
