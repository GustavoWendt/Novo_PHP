<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <style>
        body {
            background-color: #f0f4f8;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px 15px;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<?php
session_start();

//ionario'] = array();


// Verifica se todos os campos foram enviados via GET
if (
    isset($_GET['nome2']) && isset($_GET['RGeCPF2']) && isset($_GET['telefone2']) &&
    isset($_GET['usuario2']) && isset($_GET['data2']) && isset($_GET['permissao2']) &&
    isset($_GET['rua2']) && isset($_GET['bairro2']) && isset($_GET['estado2']) &&
    isset($_GET['cargo2']) && isset($_GET['email2']) && isset($_GET['senha2']) &&
    isset($_GET['cidade2']) && isset($_GET['cep2'])
) {
    // Cria array associativo com os dados
    $funcionario = array(
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

    // Salva na sessão
    $_SESSION['funcionario'][] = $funcionario;
}

// Exibe os dados da sessão
if (!empty($_SESSION['funcionario'])) {
    echo "<table>";
    echo "<tr><th>Campo</th><th>Valor</th></tr>";

    // Exibe o último funcionário adicionado
    $ultimo = end($_SESSION['funcionario']);
    foreach ($ultimo as $campo => $valor) {
        echo "<tr><td>" . htmlspecialchars($campo) . "</td><td>" . htmlspecialchars($valor) . "</td></tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
