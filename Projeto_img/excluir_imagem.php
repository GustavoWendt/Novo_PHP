<?php
require_once('conecta.php');

//OBTEM O ID VIA get GARANTINDO QUE SEJA UM NÚMERO INTEIRO
$id_imagem = isset($_GET['id'])? intval($_GET['id']) :0;

//VERIFICA SE O ID É VALIDO (maior que zero)

if($id_imagem >0){
    //CRIAR UMA QUERY SEGURA USANDO O PREPARED STATEMENT

    $queryExclusao = "DELETE FROM tabela_imagens WHERE codigo = ?";

    //PREPARE A QUERY
    $stmt = $conexao->prepare($queryExclusao);
    $stmt-> bind_param("i",$id_imagem);

    //EXCUTA A EXCLUSÃO
    if($stmt->execute()){
        echo "Imagem excluida com sucesso!";
    } else {
        die("Erro ao excluir a imagem: ".$stmt->error);
    }

    //FECHA A CONSULTA

$stmt->close();
    
} else {
    echo "ID invalido!";
}

// REDIRECIONA PARA A INDEX.PHP E GARANTE QUE O SCRIPT PARE

header("Location: index.php");
exit();

?>