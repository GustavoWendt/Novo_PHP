<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["usuario_logado"] = "admin";
        $_SESSION["carrinho_compras"] = array("produto_A" => 2, "produto_B" => 1);
        $_SESSION["ultimo_acesso"] = date("Y-m-d H:i:s");
        
        echo "Dados da sessão armazenados com sucesso!";

        if(isset($_SESSION["usuario_logado"])) {
            echo "<br>Usuário logado:".htmlspecialchars($_SESSION["usuario_logado"]);
        }

        if(isset($_SESSION["carrinho_compras"])) {
            echo "<br>Itens no carrinho:"; 
            print_r($_SESSION["carrinho_compras"]);
        }
    ?>
</body>
</html>
