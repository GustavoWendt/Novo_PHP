<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 95%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 10px 12px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 14px;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eef;
        }
    </style>
</head>
<body>

<h1>Lista de Funcionários</h1>

<?php
session_start();

$funcionario = array();
if (
    isset($_GET['nome2']) && isset($_GET['RGeCPF2']) && isset($_GET['telefone2']) &&
    isset($_GET['usuario2']) && isset($_GET['data2']) && isset($_GET['permissao2']) &&
    isset($_GET['rua2']) && isset($_GET['bairro2']) && isset($_GET['estado2']) &&
    isset($_GET['cargo2']) && isset($_GET['email2']) && isset($_GET['senha2']) &&
    isset($_GET['cidade2']) && isset($_GET['cep2'])
) {
    $novo_funcionario = array(
        'nome' => $_GET['nome2'],
        'cpf' => $_GET['RGeCPF2'],
        'telefone' => $_GET['telefone2'],
        'usuario' => $_GET['usuario2'],
        'data' => $_GET['data2'],
        'permissao' => $_GET['permissao2'],
        'rua' => $_GET['rua2'],
        'bairro' => $_GET['bairro2'],
        'estado' => $_GET['estado2'],
        'cargo' => $_GET['cargo2'],
        'email' => $_GET['email2'],
        'senha' => $_GET['senha2'],
        'cidade' => $_GET['cidade2'],
        'cep' => $_GET['cep2']
    );
    $_SESSION['funcionario'][] = $novo_funcionario;
}

if (isset($_SESSION['funcionario'])) {
    $funcionario = $_SESSION['funcionario'];
}
?>

<table>
    <tr>
        <th>Nome</th>
        <th>CPF/RG</th>
        <th>Telefone</th>
        <th>Usuário</th>
        <th>Data</th>
        <th>Permissão</th>
        <th>Rua</th>
        <th>Bairro</th>
        <th>Estado</th>
        <th>Cargo</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Cidade</th>
        <th>CEP</th>
    </tr>
    <?php foreach ($funcionario as $func) : ?>
        <tr>
            <td><?php echo htmlspecialchars($func['nome']); ?></td>
            <td><?php echo htmlspecialchars($func['cpf']); ?></td>
            <td><?php echo htmlspecialchars($func['telefone']); ?></td>
            <td><?php echo htmlspecialchars($func['usuario']); ?></td>
            <td><?php echo htmlspecialchars($func['data']); ?></td>
            <td><?php echo htmlspecialchars($func['permissao']); ?></td>
            <td><?php echo htmlspecialchars($func['rua']); ?></td>
            <td><?php echo htmlspecialchars($func['bairro']); ?></td>
            <td><?php echo htmlspecialchars($func['estado']); ?></td>
            <td><?php echo htmlspecialchars($func['cargo']); ?></td>
            <td><?php echo htmlspecialchars($func['email']); ?></td>
            <td><?php echo htmlspecialchars($func['senha']); ?></td>
            <td><?php echo htmlspecialchars($func['cidade']); ?></td>
            <td><?php echo htmlspecialchars($func['cep']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>