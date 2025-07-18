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
    if (isset($_GET['nome2']) && isset($_GET['RGeCPF2']) && isset($_GET['telefone2'])
     && isset($_GET['usuario2']) && isset($_GET['data2'])  && isset($_GET['permissao2'])
     && isset($_GET['rua2']) && isset($_GET['bairro2']) && isset($_GET['estado2'])
     && isset($_GET['cargo2'])  && isset($_GET['email2']) && isset($_GET['senha2']) && isset($_GET['cidade2']) && isset($_GET['cep2']))
    {
        echo '<div class="respostas">';
        echo "Recibido o cliente ".$_GET['nome2'];
        echo "<br/>";
        echo " que tem O telefone: ".$_GET['telefone2'];
        echo "<br/>";
        echo " que tem O usuario: ".$_GET['usuario2'];
        echo "<br/>";
        echo " que tem O data: ".$_GET['data2'];
        echo "<br/>";
        echo " que tem O permissao: ".$_GET['permissao2'];
        echo "<br/>";
        echo " que tem O rua: ".$_GET['rua2'];
        echo "<br/>";
        echo " que tem O bairro: ".$_GET['bairro2'];
        echo "<br/>";
        echo " que tem O estado: ".$_GET['estado2'];
        echo "<br/>";
        echo " que tem O cargo: ".$_GET['cargo2'];
        echo "<br/>";
        echo " que tem O email: ".$_GET['email2'];
        echo "<br/>";
        echo " que tem O senha: ".$_GET['senha2'];
        echo "<br/>";
        echo " que tem O cidade: ".$_GET['cidade2'];
        echo "<br/>";
        echo " que tem O cep: ".$_GET['cep2'];
        echo "<br/>";
    }
    ?>
</body>
</html>