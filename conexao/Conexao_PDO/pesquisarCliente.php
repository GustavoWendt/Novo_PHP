<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Pesquisar Cliente</title>
    <link rel="stylesheet" type="text/css" href="CSS/Staly.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 80px 20px 20px 20px;
            background: #f5f5f5;
            color: #333;
        }
        form {
            max-width: 400px;
            background: #fff;
            padding: 20px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px 12px;
            font-size: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus {
            border-color: #60A5FA;
            outline: none;
            background-color: #f0f8ff;
        }
        button {
            background-color: #2563EB;
            border: none;
            color: white;
            padding: 10px 0;
            width: 100%;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1D4ED8;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #60A5FA;
            color: white;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f0f8ff;
        }
        a {
            color: #2563EB;
            text-decoration: none;
            font-weight: 600;
        }
        a:hover {
            text-decoration: underline;
        }
        ul {
            margin: 0; 
            padding: 0;
        }
    </style>
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

<?php
require_once 'conexao.php';

$conexao = conectarBanco();
$busca = $_GET['busca'] ?? '';

if (!$busca):
?>
    <form action="pesquisarCliente.php" method="GET">
        <label for="busca">Digite o ID ou Nome:</label>
        <input type="text" id="busca" name="busca" required />
        <button type="submit">Pesquisar</button>
    </form>
<?php
    exit;
endif;

if (is_numeric($busca)) {
    $stmt = $conexao->prepare("SELECT id_cliente,nome,endereco,telefone,email FROM cliente2 WHERE id_cliente = :id");
    $stmt->bindParam(":id", $busca, PDO::PARAM_INT);
} else {
    $stmt = $conexao->prepare("SELECT id_cliente, nome, endereco, telefone, email FROM cliente2 WHERE nome LIKE :nome");
    $buscaNome = "%$busca%";
    $stmt->bindParam(":nome", $buscaNome, PDO::PARAM_STR);
}
$stmt->execute();
$clientes = $stmt->fetchAll();

if (!$clientes) {
    die("<p style='color:red; font-weight:600;'>Erro: Nenhum cliente encontrado.</p>");
}
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ação</th>
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
            <td><a href="atualizarCliente.php?id=<?= $cliente["id_cliente"] ?>">Editar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
