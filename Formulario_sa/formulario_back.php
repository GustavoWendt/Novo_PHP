<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #f0f4f8;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
    </style>
</head>
<body>
<?php

    session_start();

    $funcionarios = array();

    if (isset($_GET['nome2']) && isset($_GET['RGeCPF2']) && isset($_GET['telefone2'])
     && isset($_GET['usuario2']) && isset($_GET['data2'])  && isset($_GET['permissao2'])
     && isset($_GET['rua2']) && isset($_GET['bairro2']) && isset($_GET['estado2'])
     && isset($_GET['cargo2'])  && isset($_GET['email2']) && isset($_GET['senha2']) && isset($_GET['cidade2']) && isset($_GET['cep2'])){
        


        $funcionario_info = array(
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
        
        $_SESSION['funcionarios'][] = $_GET['funcionario_info'];

    }

    if (isset($_SESSION['funcionarios'])){
        $funcionarios =  $_SESSION[
            'funcionarios'];
    }

    ?>

    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($funcionarios as $func) : ?>
            <tr>
                <td><?php echo htmlspecialchars($func['nome']);?> </td>
                <td><?php echo htmlspecialchars($func['cpf']);?> </td>
                <td><?php echo htmlspecialchars($func['telefone']);?> </td>
                <td><?php echo htmlspecialchars($func['usuario']);?> </td>
                <td><?php echo htmlspecialchars($func['data']);?> </td>
                <td><?php echo htmlspecialchars($func['permissao']);?> </td>
                <td><?php echo htmlspecialchars($func['rua']);?> </td>
                <td><?php echo htmlspecialchars($func['bairro']);?> </td>
                <td><?php echo htmlspecialchars($func['estado']);?> </td>
                <td><?php echo htmlspecialchars($func['cargo']);?> </td>
                <td><?php echo htmlspecialchars($func['email']);?> </td>
                <td><?php echo htmlspecialchars($func['senha']);?> </td>
                <td><?php echo htmlspecialchars($func['cidade']);?> </td>
                <td><?php echo htmlspecialchars($func['cep']);?> </td>

            </tr>
        </tr>
        <?php endforeach; ?>

</body>
</html>