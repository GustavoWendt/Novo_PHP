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
            $sql = "SELECT id, nome, telefone, cargo, nome_foto, tipo_foto, foto FROM funcionarios WHERE id = :busca";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":busca", $busca, PDO::PARAM_INT);
        } 
        // Caso contrário, busca pelo nome (parcial)
        else {
            $sql = "SELECT id, nome, telefone, cargo, nome_foto, tipo_foto, foto FROM funcionarios WHERE nome LIKE :busca";
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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Atualizar Funcionário</title>

  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #1e272e, #0984e3);
      color: #fff;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px 10px;
    }

    form {
      background-color: rgba(30, 39, 46, 0.9);
      padding: 25px 30px;
      border-radius: 12px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
      width: 100%;
      max-width: 480px;
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
      font-weight: 700;
      color: #d1d8e0;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #d1d8e0;
    }

    input[type="text"],
    input[type="file"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 20px;
      border: 2px solid #0984e3;
      border-radius: 8px;
      background-color: #1e272e;
      color: #fff;
      font-size: 1rem;
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
      font-family: inherit;
      cursor: pointer;
    }

    input[type="text"][readonly] {
      background-color: #2f3640;
      cursor: pointer;
      color: #b2bec3;
    }

    input[type="text"]:focus,
    input[type="file"]:focus {
      border-color: #00cec9;
      outline: none;
      box-shadow: 0 0 8px #00cec9;
      background-color: #273c52;
      color: #fff;
    }

    /* Imagem */
    img {
      display: block;
      margin-bottom: 20px;
      border-radius: 8px;
      border: 2px solid #0984e3;
      max-width: 150px;
      height: auto;
    }

    button {
      background-color: #00cec9;
      color: #1e272e;
      border: none;
      padding: 12px 25px;
      border-radius: 8px;
      font-weight: 700;
      font-size: 1.1rem;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease, color 0.3s ease;
      font-family: inherit;
      user-select: none;
    }

    button:hover {
      background-color: #0984e3;
      color: #fff;
    }
  </style>

  <script>
    function habilitarEdicao(campo) {
      const el = document.getElementById(campo);
      if (el) {
        el.removeAttribute("readonly");
        el.focus();
      }
    }
  </script>
</head>
<body>
  <?php if (!empty($resultados)): ?>
    <?php foreach ($resultados as $row): ?>
      <?php $imagemBase64 = base64_encode($row['foto']); ?>
      <form action="processarAtualizacao.php" method="POST" enctype="multipart/form-data" novalidate>
        <h1>Atualizar Funcionário</h1>

        <input type="hidden" name="id" value="<?= htmlspecialchars($row["id"]) ?>" />

        <label for="nome">Nome:</label>
        <input
          type="text"
          id="nome"
          name="nome"
          value="<?= htmlspecialchars($row['nome']) ?>"
          readonly
          onclick="habilitarEdicao('nome')"
          required
          minlength="3"
          maxlength="100"
        />

        <label for="telefone">Telefone:</label>
        <input
          type="text"
          id="telefone"
          name="telefone"
          value="<?= htmlspecialchars($row['telefone']) ?>"
          readonly
          onclick="habilitarEdicao('telefone')"
          pattern="\d{8,15}"
          title="Insira um telefone válido (8 a 15 dígitos)"
          required
        />

        <label for="cargo">Cargo:</label>
        <input
          type="text"
          id="cargo"
          name="cargo"
          value="<?= htmlspecialchars($row['cargo']) ?>"
          readonly
          onclick="habilitarEdicao('cargo')"
          required
          maxlength="50"
        />

        <label for="foto">Foto atual:</label>
        <img
          src="data:<?= htmlspecialchars($row['tipo_foto']); ?>;base64,<?= $imagemBase64 ?>"
          alt="Foto do funcionário"
          width="150"
          height="auto"
        />

        <label for="foto">Alterar foto:</label>
        <input
          type="file"
          name="foto"
          id="foto"
          accept="image/*"
          onclick="habilitarEdicao('foto')"
        />

        <button type="submit">Atualizar Funcionário</button>
      </form>
    <?php endforeach; ?>
  <?php else: ?>
    <p style="color: #eee; text-align:center;">Nenhum funcionário encontrado.</p>
  <?php endif; ?>
</body>
</html>