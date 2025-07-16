<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
    $numero=1;
    while ($numero <=10){
        $i=1;
        while ($i <=10){
            echo "$numero x $i = ",$numero * $i, "<br><br>";
            $i++;
        }
        $numero++;
    }
    ?>
</body>
</html>