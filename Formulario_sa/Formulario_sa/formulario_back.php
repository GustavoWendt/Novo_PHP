<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_GET['nome']) && isset($_GET['RGeCPF']) && isset($_GET['telefone'])
     && isset($_GET['usuario']) && isset($_GET['data'])  && isset($_GET['permissao'])
     && isset($_GET['rua']) && isset($_GET['bairro']) && isset($_GET['estado'])
     && isset($_GET['cargo'])  && isset($_GET['email']) && isset($_GET['senha']) && isset($_GET['cidade']) && isset($_GET['cep']))
    {
        echo "Recibido o cliente ".$_GET['nome'];
        echo "<br/>";
        echo " que tem O telefone: ".$_GET['telefone'];
        echo "<br/>";
        echo " que tem O usuario: ".$_GET['usuario'];
        echo "<br/>";
        echo " que tem O data: ".$_GET['data'];
        echo "<br/>";
        echo " que tem O permissao: ".$_GET['permissao'];
        echo "<br/>";
        echo " que tem O rua: ".$_GET['rua'];
        echo "<br/>";
        echo " que tem O bairro: ".$_GET['bairro'];
        echo "<br/>";
        echo " que tem O estado: ".$_GET['estado'];
        echo "<br/>";
        echo " que tem O cargo: ".$_GET['cargo'];
        echo "<br/>";
        echo " que tem O email: ".$_GET['email'];
        echo "<br/>";
        echo " que tem O senha: ".$_GET['senha'];
        echo "<br/>";
        echo " que tem O cidade: ".$_GET['cidade'];
        echo "<br/>";
        echo " que tem O cep: ".$_GET['cep'];
        echo "<br/>";
    }
    ?>
</body>
</html>