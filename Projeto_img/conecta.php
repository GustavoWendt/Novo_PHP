<?php
// DEFINIÇÃO DAS CREDENCIAIS DE CONEXÃO
$servername= "localhost";
$username = "root";
$password = "";
$dbname =  "armazena_imagem";

//CRIANDO A CONEXÃO USANDO MYSQLI
$conexao= new mysqli($servername, $username, $password, $dbname);

//VERIFICANDO SE OUVE ERRO NA CONEXÃO

if($conexao->connect_error){
    die("Falha na conexão: ".$conexao->connect_error);
}

?>