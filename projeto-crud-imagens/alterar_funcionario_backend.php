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
            $sql = "SELECT id, nome, telefone, nome_foto, tipo_foto, foto FROM funcionarios WHERE id = :busca";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":busca", $busca, PDO::PARAM_INT);
        } 
        // Caso contrário, busca pelo nome (parcial)
        else {
            $sql = "SELECT id, nome, telefone, nome_foto, tipo_foto, foto FROM funcionarios WHERE nome LIKE :busca";
            $stmt = $pdo->prepare($sql);
            $like = "%$busca%";
            $stmt->bindParam(":busca", $like, PDO::PARAM_STR);
        }

        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar funcionario</title>
    <script>
        function habilitarEdicao(campo) {
            document.getElementById(campo).removeAttribute("readonly");
        }
    </script>
</head>
<body>
<?php foreach ($resultados as $row): ?>
    <?php $imagemBase64 = base64_encode($row['foto']); ?>
    <form action="processarAtualizacao.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= htmlspecialchars($row["id"]) ?>" />

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($row['nome']) ?>" readonly onclick="habilitarEdicao('nome')" />

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($row['telefone']) ?>" readonly onclick="habilitarEdicao('telefone')" />

        <label for="foto">Foto:</label><br>
        <img src="data:<?= htmlspecialchars($row['tipo_foto']); ?>;base64,<?= $imagemBase64 ?>" alt="Foto do funcionário" width="150" /><br>
        <input type="file" name="foto" id="foto" onclick="habilitarEdicao('foto')">

        <button type="submit">Atualizar Cliente</button>
    </form>
<?php endforeach; ?>

</body>
</html>