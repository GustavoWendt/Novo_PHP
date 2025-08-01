<?php 
require 'Conexao.php';

$conexao = conectarBanco();
$stmt = $conexao->prepare("SELECT * FROM cliente");
$stmt->execute();
$clientes = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista de clientes</title>
    <link rel="stylesheet" type="text/css" href="CSS/Staly.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 80px 20px 20px 20px;
            background: #f9fafb;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #2563EB;
        }
        table {
            width: 100%;
            max-width: 900px;
            margin: 0 auto 40px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #60A5FA;
            color: white;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f0f8ff;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        /* Mantém o estilo do menu dropdown igual ao original */
    </style>
</head>
<body>

<h2>Lista de clientes</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= htmlspecialchars($cliente["id_cliente"]) ?></td>
            <td><?= htmlspecialchars($cliente["nome"]) ?></td>
            <td><?= htmlspecialchars($cliente["endereco"]) ?></td>
            <td><?= htmlspecialchars($cliente["telefone"]) ?></td>
            <td><?= htmlspecialchars($cliente["email"]) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

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
        <a href="javascript:void(0)" class="dropbtn">Buscar</a>
        <div class="dropdow-content">
            <a href="buscarCliente.php">Buscar Cliente</a>
        </div>
    </li>
</ul>

</body>
</html>
