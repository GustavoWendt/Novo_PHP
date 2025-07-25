
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de tarefas</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 95%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 10px 12px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 14px;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #eef;
        }
    </style>

</head>
<body>
    <h1>Gerenciador de Tarefas<h1>
        <!--Aqui irá o restante do código -->

    <form>
        <fieldset>
            <legend>Nova tarefa</legend>
            <label> Tarefa:
                <input type="text" name="nome" />
            </label>
            <label> Descrição (Opcional):
                <textarea name="descricao"></textarea>
            </label>
            <label> Prazo (Opcional):
                <input type="text" name="prazo" />
            </label>
            <input type="submit" value="cadastrar" />

            <fieldset>
                <legend>Prioridade</legend>
                <label>
                    <input type="radio" name="prioridade" value="baixa" checked />
                    Baixa
                    <input type="radio" name="prioridade" value="media" />
                    Média
                    <input type="radio" name="prioridade" value="alta" />
                    Alta
                </label>
            </fieldset>
            <label>
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="sim" />
            </label>
            <input type="submit" value="cadastrar" />
        </fieldset>
    </form>

<table>
    <tr>
        <th>Tarefas</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluida</th>
    </tr>

        <?php foreach ($lista_tarefas as $tarefa) : ?>
            <tr>
                <td><?php echo $tarefa['nome']; ?> </td>
                <td><?php echo $tarefa['descricao']; ?> </td>
                <td><?php echo $tarefa['prazo']; ?> </td>
                <td><?php echo $tarefa['prioridade']; ?> </td>
                <td><?php echo $tarefa['concluida']; ?> </td>
            </tr>
        </tr>
        <?php endforeach; ?>
</body>
</html>