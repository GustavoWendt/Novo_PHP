<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $texto = file_get_contents("Texto.txt");
        echo nl2br($texto);
        var_dump($texto);
    ?>
</body>
</html>