<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Sintaaxe: setcookies(name, value, expire, path, domains, segure, httponly);

    //Exemplo 1

    setcookie("nome_usuario","João Silva", time() +3600); //Expira em 1 hora (3600 segundos)

    echo "Cookie 'nome_usuario' criado com sucesso!";

    ?>

</body>
</html>


