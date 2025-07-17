<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $vogais = array("a","e","i","o","u","A","E","I","O","U",);
     echo "Hello world of PHP<br/>";
     $cons = str_replace($vogais, "","Hello world of PHP");
     echo "Consoantes: ".$cons,"<br/>";
     //     012345678901
     $test = "Hello world! \n";
     print "Posição da letra 'o' :";
     print strpos ($test, "o")."<br/>";
     print "Posição da letra 'o' após 5ª :";
     print strpos($test,"o", 5)."<hr/>"; //vai imprimeir a posição da letra '0' após a 5ª posição
     $message = "troca letra uma a uma";
     echo $message."<br/>";
     $new_message = strtr($message, 'abcdef','123456'); //vai criptografar
     echo "Criptografando: ".$new_message. "<br/>";
     $new_message = strtr($message, '123456','abcdef'); //vai descriptografar
     echo "Descriptografando: ".$new_message. "<br/>";
    ?>
</body>
</html>