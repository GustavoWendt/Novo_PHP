<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        unset($_SESSION["usuario_logado"]); //Remove apenas a variável 'usuario_logado'
        echo "Variável 'usuario_logado' removido da sessão.";
    ?>
</body>
</html>
