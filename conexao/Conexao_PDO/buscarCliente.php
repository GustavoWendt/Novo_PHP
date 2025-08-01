<?php
require_once 'conexao.php';

$conexao = conectarBanco();

// Consulta todos os clientes do banco, ordenado por nome
$sql = "SELECT id_cliente, nome, endereco, telefone, email FROM cliente ORDER BY nome ASC";
$stmt = $conexao->prepare($sql);
$stmt->execute();
$clientes = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Cliente</title>
    <link rel="stylesheet" type="text/css" href="CSS/Staly.css">

    <!-- Melhorias visuais simples com CSS interno -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f9f9f9;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ccc;
        }

        th {
            background-color: #333;
            color: white;
        }

        td a {
            color: #0066cc;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
        }

        p {
            text-align: center;
            color: red;
        }

        .logo-item img {
            margin: 5px 10px;
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <h2>Todos os clientes cadastrados</h2>

    <?php if(!$clientes): ?>
        <p>Nenhum cliente encontrado no banco de dados.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= htmlspecialchars($cliente["id_cliente"]) ?></td>
                    <td><?= htmlspecialchars($cliente["nome"]) ?></td>
                    <td><?= htmlspecialchars($cliente["endereco"]) ?></td>
                    <td><?= htmlspecialchars($cliente["telefone"]) ?></td>
                    <td><?= htmlspecialchars($cliente["email"]) ?></td>
                    <td>
                        <a href="atualizarCliente.php?id=<?= $cliente["id_cliente"]?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <ul>
        <li class="dropdow logo-item">
            <img src="LogoForneInjet.png" alt="Logo Fornjet" height="60" width="60">
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
            <a href="javascript:void(0)" class="dropbtn">Excluir</a>
            <div class="dropdow-content">
                <a href="deletarCliente.php">Excluir cliente</a>
            </div>
        </li>
        <li class="dropdow">
            <a href="javascript:void(0)" class="dropbtn">Listar clientes</a>
            <div class="dropdow-content">
                <a href="Listar_Clientes.php">Listar clientes</a>
            </div>
        </li>
    </ul>
</body>
</html>
