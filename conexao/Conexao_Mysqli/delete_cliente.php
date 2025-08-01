<?php
//Inclui o arquivo da conexão com o bd
require_once "conexao.php";
 //Estabelece conexão
$conexao = conectadb();

 //Define o id do usuário
 $id_cliente = 7;

 $stmt=$conexao->prepare("DELETE FROM cliente2 WHERE id_cliente = ?");
//Associa o parâmetro com o valor da consulta
 $stmt->bind_param("i",$id_cliente);

if ($stmt->execute()){
    echo "Cliente removido com sucesso!";
} else {
    echo "Erro ao remover cliente:".$stmt->error;
}

$stmt->close();
$conexao->close();

?>