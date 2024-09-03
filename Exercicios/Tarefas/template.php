<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
    <style>
        body, select, input {
            font-size: 16px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        table {
            text-align: center;
            border-collapse: collapse;
            border: 2px solid black;
            margin: 7px;
            width: 100%;
        }
        h1 {
            text-decoration: underline;
            text-align: center;
        }
        td, th {
            padding: 10px 10px;
        }
        th {
            font-size: 20px;
        }
        fieldset {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 2px solid black;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input, select, option {
            width: 100%;
            padding: 5px
        }
        legend {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Gerenciador de tarefas PHP</h1>
    <div class="principal">
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Nome:
                    <input type="text" name="nome">
                </label>
                <br>
                <br>
                <label>
                    Data:
                    <input type="date" name="data">
                </label>
                <br>
                <br>
                <label>
                    Prioridade:
                    <input type="number" min="1" max="10" name="prioridade">
                </label>
                <br>
                <br>
                <label>
                    Status:
                    <select name="status" id="status">
                        <option value="Incompleta">Incompleta</option>
                        <option value="Em andamento">Em andamento</option>
                        <option value="Completo">Completa</option>
                    </select>
                </label>
                <input type="submit" name="Gravar">
            </fieldset>
        </form>
        <table border="1">
            <tr>
                <th colspan="4">Tarefas</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td>Data</td>
                <td>Prioridade</td>
                <td>Status</td>
            </tr>
            <?php 
                foreach($lista_tarefas as $tarefa) : 
            ?>
            <tr>
                <?php 
                    $dataformatada = date("d/m/Y", strtotime($tarefa['data']));
                    echo "<td>" . $tarefa['nome'] . "</td>";
                    if ($tarefa['data']!= "")
                    {
                        echo "<td>" . $dataformatada . "</td>";
                    }
                    else
                    {
                        echo "<td></td>";
                    }
                    echo "<td>" . $tarefa['prioridade'] . "</td>";
                    echo "<td>" . $tarefa['status'] . "</td>";
                ?>
            </tr>
            <?php 
                endforeach
            ?>
        </table>
    </div>
</body>
</html>