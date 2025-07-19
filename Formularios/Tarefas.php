<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas<h1>
        <!--Aqui irá o restante do código -->

    <form>
        <fieldset>
            <label> Tarefa:
                <input type="text" name="nome" />
            </label>
            <input type="submit" value="cadastrar" />
        </fieldset>
    </form>

    <?php
        $lista_tarefas= array();
            if (isset($_GET['nome'])) {
                $lista_tarefas[] = $_GET['nome'];
            }
    ?>

<table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa; ?> </td>
            </tr>
        </tr>
        <?php endforeach; ?>
</body>
</html>