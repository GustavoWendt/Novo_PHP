<?php 
// FUNÇÃO PARA DIMENSIONAR A IMAGEM
function redimensionarImagem($imagem,$largura,$altura){
    //OBTEM AS DIMENSÕES ORIGINAIS DA IMAGEM
    // GETIMAGESIZE() RETORNA A LARGURA E ALTURA DE UMA IMAGEM

    list($larguraOriginal,$alturaOriginal)=getimagesize($imagem);

    //CRIA UMA NOVA IMAGEM EM BRANCO COM AS NOVAS DIMENSÕES

    $novaImagem = imagecreatetruecolor($largura,$altura);

    // CARREGA A IMAGEM ORIGINAL(jprg) A PARTIR DO ARQUIVO

    $imagemOriginal = imagecreatefromjpeg($imagem);

    //COPIA E REDIMENSIONA A IMAGEM ORIGINAL PARA A NOVA
    //imagecopyresampled() -- COPIA E REDIMENSIONAMENTO E SUAVIZAÇÃO

    imagecopyresampled($novaImagem,$imagemOriginal,0,0,0,0, $largura,$altura,$larguraOriginal,$alturaOriginal);

    //INICIA UM BUFFER PARA GUARDAR A IMAGEM COMO TEXTO BINARIO
    //ob_start() -- INICIA O "output buffering" GUARDANDO A SAIDA
    
    ob_start();

    //imagejpeg() ENVIA A IMAGEM PARA O OUTPUT (QUE VAI PRO BUFFER)

    imagejpeg($novaImagem);

    //OB_GET_CLEAN() -- PEGAR O CONTEUDO DO BUFFEER E LIMPA

    $dadosImagem = ob_get_clean();

    //LIBERA A MEMORIA USADA PELAS IMAGENS
    //imagedestroy() -- LIMPA A M,EMORIA DA IMAGEM CRIADA

    imagedestroy($novaImagem);
    imagedestroy($imagemOriginal);

    //RETORNA A IMAGEM REDIMENSIONADA EM FORMATO BINARIO
    return $dadosImagem;
}

    //CONFIGURAÇÃO DO BANCO DE DADOS
    $servername= "localhost";
    $bdname = 'armazena-imagem';
    $username = 'root';
    $password = "";

    try{
        //CONEXÃO COM O BANCO USANDO PDO
        $pdo = new PDO("mysql:host=$host;dbname:$dbname",$username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_FILES['foto'])){

            if($_FILES['foto']['error'] == 0){
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $nomeFoto = $_FILES['foto']['name']; //PEGA O NOME ORIGINAL DO ARQUIVO
                $tipoFoto = $_FILES['foto']['type']; //PEGA O TIPO mime DA IMAGEM
                
            //REDIMENSIONA A IMAGEM
            // O  CÓDIGO ABAIXO CUJA VARIAVEL É TMP_NAME É O CAMINHO TEMPORARIO DO ARQUIVO

            $foto = redimensionarImagem($_FILES['foto']['tmp_name'],300,400);

            // INSERE NO BANCO DE DADOS USANDO 'sql' PREPARED

            $sql = "INSERT INTO funcionarios (nome,telefone,nome_foto,tipo_foto,foto)
            VALUES(:nome,:telefone,:nome_foto,:tipo_foto,:foto)";
            $stmt = $pdo->prepare($sql); //RESPONSAVEL POR PREPARAR A QUERY PARA EVITAR ATAQUE SQL INJECTION
            $stmt->bindParam(':nome',$nome);//LIGA OS PARAMETROS ÁS VARIAVEIS
            $stmt->bindParam(':telefone',$telefone);//LIGA OS PARAMETROS ÁS VARIAVEIS
            $stmt->bindParam(':nome_foto',$nomeFoto);//LIGA OS PARAMETROS ÁS VARIAVEIS
            $stmt->bindParam(':foto',$foto,PDO::PARAM_LOB);//O LOB É IGUAL  Large OBject USADO PARA DADOS BINARIOS COMO IMAGENS

            if($stmt->execute()){
                echo "funcionario cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o funcionario!";
            }
            
            }else {
                echo "Erro ao fazer upload da foto! Código: " . $_FILES['foto']['error'];
            }
        }
    } catch(PDOException $e){
        echo "Erro. ".$e->getMessage(); 
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de imagens</title>
</head>
<body>
    <h1>Lista de imagens</h1>

    <a href="consulta_funcionario.php">Listar funcionarios</a>
</body>
</html>