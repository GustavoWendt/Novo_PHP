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
        echo nl2br($texto)."<hr/>";
        $texto = $texto. "extra";
        echo nl2br($texto)."<hr/>";
        file_put_contents("Texto.txt", $texto);

        //Grava uma string em um arquivo, substituindo qualquer conteúdo anterior

    ?>
</body>
</html>