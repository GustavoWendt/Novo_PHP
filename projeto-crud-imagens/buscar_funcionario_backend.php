<?php
// Conexão PDO
$host = "localhost";
$dbname = "empresa";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_GET['busca'])) {
        $busca = trim($_GET['busca']);

        // Se for número, busca pelo ID
        if (is_numeric($busca)) {
            $sql = "SELECT nome, telefone, cargo, nome_foto, tipo_foto, foto FROM funcionarios WHERE id = :busca";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":busca", $busca, PDO::PARAM_INT);
        } else {
            $sql = "SELECT nome, telefone, cargo, nome_foto, tipo_foto, foto FROM funcionarios WHERE nome LIKE :busca";
            $stmt = $pdo->prepare($sql);
            $like = "%$busca%";
            $stmt->bindParam(":busca", $like, PDO::PARAM_STR);
        }

        $stmt->execute();
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($resultados) {
            echo '<style>
                    body { font-family: Arial, sans-serif; background: #f4f4f4; }
                    .container { display: flex; flex-wrap: wrap; gap: 20px; }
                    .card {
                        background: white;
                        border-radius: 10px;
                        box-shadow: 0px 4px 6px rgba(0,0,0,0.1);
                        padding: 15px;
                        max-width: 250px;
                        text-align: center;
                        transition: transform 0.2s;
                    }
                    .card:hover { transform: scale(1.05); }
                    .card img {
                        border-radius: 8px;
                        max-width: 100%;
                        height: auto;
                    }
                    .card h3 { margin: 10px 0 5px; }
                    .card p { margin: 5px 0; font-size: 14px; color: #555; }
                  </style>';

            echo '<div class="container">';
            foreach ($resultados as $row) {
                $imagemBase64 = base64_encode($row['foto']);
                echo "<div class='card'>
                        <img src='data:{$row['tipo_foto']};base64,{$imagemBase64}' alt='Foto do funcionário'>
                        <h3>{$row['nome']}</h3>
                        <p><strong>Telefone:</strong> {$row['telefone']}</p>
                        <p><strong>Cargo:</strong> {$row['cargo']}</p>
                        <p><strong>Arquivo:</strong> {$row['nome_foto']}</p>
                        <p><strong>Tipo:</strong> {$row['tipo_foto']}</p>
                      </div>";
            }
            echo '</div>';
        } else {
            echo "Nenhum funcionário encontrado.";
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
