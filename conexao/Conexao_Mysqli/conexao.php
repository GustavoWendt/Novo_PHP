<?php
//Habilita ralatório detalhado de erros no MySQL
mysqli_report(MYSQLI_REPORT_ERROR |
MYSQLI_REPORT_STRICT);

function conectadb() {
    $endereco = "localhost";
    $usuario = "root";
    $senha = "";
    $banco="empresa";

    try {
        $con = new mysqli($endereco, $usuario, $senha, $banco);
        //Definição do conjunto de caracters para enviar problemas de acentuação
        $con->set_charset("utf8mb4");
        return $con;
        } catch (Exception $e) {
            die("Erro na conexao".$e->getMessage());
        }
}