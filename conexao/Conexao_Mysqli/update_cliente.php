<?php
//Inclui o arquivo da conexão com o bd
require_once "conexao.php";
 //Estabelece conexão
$conexao = conectadb();

 //Definição dos novos valores
 $nome = "Gustavo Wendt";
 $endereco = "Rua Kalda casa, 13";
 $telefone = "(41) 999786986";
 $email = "loiroDoTchan@gmail.com";


 //Define o id do usuário
 $id_cliente = 7;

 $stmt=$conexao->prepare("UPDATE cliente SET nome=?, endereco = ?, telefone = ?, email = ? WHERE id_cliente = ?");

 $stmt->bind_param("ssssi", $nome,$endereco,$telefone,$email, $id_cliente);

 //Executa a atualização
 if ($stmt->execute()) {
    echo "Cliente atualizado com sucesso!";
 } else {
    echo "Erro ao atualizar cliente: ".$stmt->error;}

    $stmt->close();
    $conexao->close();?>