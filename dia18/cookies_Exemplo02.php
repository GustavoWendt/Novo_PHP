<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Sintaxe: setcookie(name, value, expire, path, domain, secure, httponly)

    // Exemplo 1
    setcookie("preferencias_site", "tema=escuro&idioma=pt_BR",time()+(86400 * 7), "/","",false,true); //86400 segundos = 1 dia 

    echo "<br>Cookie 'preferencias_site' criado com sucesso!";
    ?>
</body>
</html>
