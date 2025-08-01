<?php
//Inclui o arquivo da conexão com o bd
require_once "conexao.php";
 //Estabelece conexão
 $conexao = conectadb();

 //Define a consulta SQL para buscar clientes
 $sql = "SELECT id_cliente, nome, email FROM cliente";

 //Executa a consulta nop banco
 $result = $conexao->query($sql);

 if ($result->num_rows > 0) {

    while($linha = $result->fetch_assoc()) {
        echo "ID: " .$linha["id_cliente"]."-Nome: " .$linha["nome"]." - Email: ".$linha["email"]. "</br>";}
    } else {
        echo "Nenhum resultado encontrado.";
    } 
    $conexao->close();
?>