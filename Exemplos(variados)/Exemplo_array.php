<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dias = array('domingo','segunda','terça','quarta','quinta','sexta','sabado');
        echo $dias[1]."<br/>";
        print_r($dias); //imprime o valor e o índice do array
        echo "<br/>";
        var_dump($dias); //imprime o valor, indice, tipo da variavel e quantidade de caracters.
    ?>
</body>
</html>