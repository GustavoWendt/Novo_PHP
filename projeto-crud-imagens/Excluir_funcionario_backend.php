<?php
// Conexão PDO
$host = "localhost";
$dbname = "armazena_imagem";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['id'])) {
        $id = trim($_GET['id']);

        $sql = "DELETE FROM funcionarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);

        $stmt->execute();

        echo "<script>alert('Funcionário excluido com sucesso!'); window.location.href='index.php';</script>";

    } else {
        echo "Erro, funcionario não encontrado!";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
