<?php
$host = "localhost";
$dbname = "armazena_imagem";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['telefone'])) {
        $id = trim($_POST['id']);
        $nome = trim($_POST['nome']);
        $telefone = trim($_POST['telefone']);

        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $nomeFoto = $_FILES['foto']['name'];
            $tipoFoto = $_FILES['foto']['type'];
            $fotoBinario = file_get_contents($_FILES['foto']['tmp_name']);

            $sql = "UPDATE funcionarios SET nome = :nome, telefone = :telefone, nome_foto = :nome_foto, tipo_foto = :tipo_foto, foto = :foto WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":nome_foto", $nomeFoto);
            $stmt->bindParam(":tipo_foto", $tipoFoto);
            $stmt->bindParam(":foto", $fotoBinario, PDO::PARAM_LOB);
        } else {
            $sql = "UPDATE funcionarios SET nome = :nome, telefone = :telefone WHERE id = :id";
            $stmt = $pdo->prepare($sql);
        }

        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":telefone", $telefone);

        $stmt->execute();
        echo "<script>alert('Funcionário alterado com sucesso!'); window.location.href='index.php';</script>";
    } else {
        echo "Dados insuficientes para atualização.";
    }

} catch (PDOException $e) {
    error_log("Erro ao atualizar cliente: " . $e->getMessage());
    echo "Erro ao atualizar registro.";
}
?>
