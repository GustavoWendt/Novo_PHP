<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $valores = array("Gustavo Wendt","35","M","103");
       list($usuario, $idade, $genero, $qi) = $valores;
       echo "Usuário:".$usuario."<br/>";
       echo "Idade:".$idade."<br/>";
       echo "Gênero:".$genero."<br/>";
       echo "QI:".$qi."<br/>";
    ?>
</body>
</html>