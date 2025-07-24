<?php
session_start();


if (!isset($_SESSION['informacoes'])) {
    $_SESSION['informacoes'] = array();
}


if (
    isset($_GET['nome2']) && isset($_GET['RGeCPF2']) && isset($_GET['telefone2']) &&
    isset($_GET['usuario2']) && isset($_GET['data2']) && isset($_GET['permissao2']) &&
    isset($_GET['rua2']) && isset($_GET['bairro2']) && isset($_GET['estado2']) &&
    isset($_GET['cargo2']) && isset($_GET['email2']) && isset($_GET['senha2']) &&
    isset($_GET['cidade2']) && isset($_GET['cep2'])
) {

    $dados = array(
        'nome' => $_GET['nome2'],
        'rg_cpf' => $_GET['RGeCPF2'],
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
        'cep' => $_GET['cep2'],
    );

    $_SESSION['informacoes'][] = $dados;
}

$informacoes = $_SESSION['informacoes'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Informações Salvas</title>
    <style>
        body {
            background-color: #f0f4f8;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>RG/CPF</th>
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
        </thead>
        <tbody>
        <?php foreach ($informacoes as $info) : ?>
            <tr>
                <td><?= htmlspecialchars($info['nome']) ?></td>
                <td><?= htmlspecialchars($info['rg_cpf']) ?></td>
                <td><?= htmlspecialchars($info['telefone']) ?></td>
                <td><?= htmlspecialchars($info['usuario']) ?></td>
                <td><?= htmlspecialchars($info['data']) ?></td>
                <td><?= htmlspecialchars($info['permissao']) ?></td>
                <td><?= htmlspecialchars($info['rua']) ?></td>
                <td><?= htmlspecialchars($info['bairro']) ?></td>
                <td><?= htmlspecialchars($info['estado']) ?></td>
                <td><?= htmlspecialchars($info['cargo']) ?></td>
                <td><?= htmlspecialchars($info['email']) ?></td>
                <td><?= htmlspecialchars($info['senha']) ?></td>
                <td><?= htmlspecialchars($info['cidade']) ?></td>
                <td><?= htmlspecialchars($info['cep']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
