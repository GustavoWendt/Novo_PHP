<?php
// Conexão PDO
$host = "localhost";
$dbname = "armazena_imagem";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['busca'])) {
        $busca = trim($_GET['busca']);

        // Se for número, busca pelo ID
        if (is_numeric($busca)) {
            $sql = "SELECT nome, telefone, nome_foto, tipo_foto, foto FROM funcionarios WHERE id = :busca";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":busca", $busca, PDO::PARAM_INT);
        } 
        // Caso contrário, busca pelo nome (parcial)
        else {
            $sql = "SELECT nome, telefone, nome_foto, tipo_foto, foto FROM funcionarios WHERE nome LIKE :busca";
            $stmt = $pdo->prepare($sql);
            $like = "%$busca%";
            $stmt->bindParam(":busca", $like, PDO::PARAM_STR);
        }

        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($resultados) {
            foreach ($resultados as $row) {
                echo" | Nome: " . $row['nome'] . " | Telefone: " . $row['telefone'] . " | Nome imagem: " . $row['nome_foto'] . " | Tipo da imagem: " . $row['tipo_foto'] ."<br>";

                 // Exibe a imagem convertida
                 $imagemBase64 = base64_encode($row['foto']);
                 echo "<img src='data:{$row['tipo_foto']};base64,{$imagemBase64}' 
                        alt='Foto do funcionário' width='150'><hr>";


            }
        } else {
            echo "Nenhum funcionário encontrado.";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
