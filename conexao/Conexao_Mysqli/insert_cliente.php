<?php
//Inclui o arquivo da conexão com o bd
require_once "conexao.php";
 //Estabelece conexão
 $conexao = conectadb();

 //Definição dos valores para inserção
 $nome = "Gustavo Wendt";
 $endereco = "Rua Kalamango, 32";
 $telefone = "(41) 999786986";
 $email = "loiroDoTchan@gmail.com";

 //Prepara a consulta SQL usando 'prepare()' para evitar SQL Injection
 $stmt = $conexao-> prepare("INSERT INTO cliente2(nome, endereco, telefone, email) VALUES (?,?,?,?)");
 $stmt->bind_param("ssss", $nome, $endereco, $telefone, $email);

 if ($stmt->execute()){
    echo "Cliente adicionado com sucesso!";
 } else {
    echo "Erro ao adicionar cliente: ".$stmt->error;
 }

 $stmt->close();
 $conexao->close();
 ?>