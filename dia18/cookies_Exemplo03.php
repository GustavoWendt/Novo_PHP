<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["nome_usuario"])) {
            $nome = $_COOKIE["nome_usuario"];
            echo "Bem-vindo de volta, ".htmlspecialchars($nome)."!";
        } else {
            echo "Olá, visitante! Parece que voçê é novo por aqui";
        }
         echo "<br>";

         if(isset($_COOKIE["preferencias_site"])) {
            $preferencias = $_COOKIE["preferencias_site"];
            echo "Suas preferencias são: ".htmlspecialchars($preferencias);
         }
    ?>
</body>
</html>
