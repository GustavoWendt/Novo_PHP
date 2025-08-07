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
        $pdo = new PDO("mysql:host=$host;dbname:$dbname",$username,)
    }
?>