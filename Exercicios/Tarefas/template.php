<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerenciador de tarefas PHP</h1>
    <div class="principal">
        <form method="POST">
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Nome:
                    <input type="text" name="nome">
                </label>
                <br>
                <br>
                <label>
                    Descrição:
                    <input type="text" name="descricao">
                </label>
                <br>
                <br>
                <label>
                    Prazo:
                    <input type="date" name="prazo">
                </label>
                <br>
                <br>
                <label>
                    Prioridade:
                    <input type="number" min="1" max="3" name="prioridade" value="1">
                </label>
                <br>
                <br>
                <label>
                    Concluída:
                    <input type="checkbox" name="concluida">
                </label>
                <input type="submit" name="Gravar">
            </fieldset>
        </form>
        <table border="1">
            <tr>
                <th colspan="5">Tarefas</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Prazo</td>
                <td>Prioridade</td>
                <td>Concluída</td>
            </tr>
            <?php 
                foreach($lista_tarefas as $tarefa) : 
            ?>
            <tr>
                <?php 
                    if ($tarefa['concluida'] == 1) 
                    {
                        $checkbox = "<td><input type='checkbox' onclick='return false;' name='select' checked></td>";
                    }
                    else
                    {
                        $checkbox = "<td><input type='checkbox' onclick='return false;' name='select'></td>";
                    }
                    echo "<td>" . $tarefa['nome'] . "</td>";
                    echo "<td>" . $tarefa['descricao'] . "</td>";
                    echo "<td>" . $tarefa['prazo'] . "</td>";
                    echo "<td>" . $tarefa['prioridade'] . "</td>";
                    echo $checkbox;
                ?>
            </tr>
            <?php 
                endforeach
            ?>
        </table>
    </div>
</body>
</html>