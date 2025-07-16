<!DOCTYPE html>
<html lang="ept-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota = 10.0;
    $aprovado = ($nota >= 7.0);
    if ($aprovado)
    {
        echo "Você passou, boa sorte no proxímo ano";
    }

    $exame = ($nota > 3.0  && $nota<7);
    if ($exame)
    {
        echo "Você está de exame, boa sorte!";
    }

    $reprovado = ($nota <= 3.0);
    if ($reprovado)
    {
        echo "Você reprovou, boa sorte de novo";
    }
    ?>
</body>
</html>