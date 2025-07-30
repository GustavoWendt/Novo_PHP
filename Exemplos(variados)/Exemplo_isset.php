<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name =  "Xenia";
    #$name = NULL;
    if (isset($name)) {
        print "Essa linha não será executada pois o valor de name é nulo.\n";
    }
    ?>

</body>
</html>