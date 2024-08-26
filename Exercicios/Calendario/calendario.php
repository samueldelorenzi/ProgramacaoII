<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário PHP</title>
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: whitesmoke;
        }
        .calendario {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            padding: 20px;
        }
        table {
            text-align: center;
            border-collapse: collapse;
            border: 2px solid #009879;
            margin: 7px;
        }
        td {
            padding: 15px 15px;
            border: 2px solid #009879;
        }
        th {
            padding: 15px 15px;
            border: 2px solid #007059;
        }
        thead {
            border: 2px solid #007059;
            background-color: #009879;
            color: whitesmoke;
        }
        td:hover {
            background-color: #009879;
            color: #fff;
        }
        th:hover {
            background-color: #fff;
            color: black;
        }
        .hoje {
            background-color: #007059;
            color: whitesmoke;
            font-weight: bolder;
        }
        .hojedomingo {
            color: white;
            font-weight: bolder;
            background-color: lightcoral;
        }
        .domingo {
            color: red;
        }
        .titulo {
            vertical-align: middle;
            text-align: center;
            font-size: 32px;
            font-weight: bold;
        }
        .botao {
            font-size: 17px;
            padding: 0.5em 2em;
            vertical-align: middle;
            border: none;
            outline: none;
            background-color: #007059;
            padding: 10px 20px;
            font-weight: 700;
            color: #fff;
            border-radius: 5px;
            transition: all ease 0.1s;
            box-shadow: 0px 5px 0px 0px #009879;
        }

        .botao:active {
        transform: translateY(5px);
        box-shadow: 0px 0px 0px 0px #a29bfe;
        }
        
        select, select:active {
            vertical-align: middle;
            font-size: 32px;
            font-weight: bold;
            border-radius: 5px;
            border: 5px solid #007059;
        }
    </style>
</head>

<?php
    $anoselecionado = filter_input(INPUT_POST,"anos");
    if (!$anoselecionado) {
        $anoselecionado = date('Y');
    }
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    
    // cria funcao para linhas
    function linha($semana, $nummes, $anoselecionado)
    {
        $linha = "<tr>";
        $i = 0;
        while ($i < count($semana)) 
        {
            if(array_key_exists($i, $semana))
            {
                if (date("$anoselecionado-$nummes-$semana[$i]") == date("Y-n-d"))
                {
                    $hoje = "<td class='hoje'>$semana[$i]</td>";
                    // caso seja hoje e domingo
                    if(date('w', strtotime(date("$anoselecionado-$nummes-$semana[$i]")))==0)
                    {
                        $hoje = "<td class='hojedomingo'>$semana[$i]</td>";
                    }
                    $linha .= $hoje;
                }
                else
                {
                    if(date('w', strtotime(date("$anoselecionado-$nummes-$semana[$i]"))) == 0)
                    {
                        $linha .= "<td class='domingo'>$semana[$i]</td>";
                    }
                    else
                    {
                        $linha .= "<td>$semana[$i]</td>";
                    }
                }
                
            }
            else
            {
                $linha = "<td></td>";
            }
            $i++;
        }    
        $linha .= "</tr>";
        return $linha;
    }
    // popula o calendario
    function calendario($nummes, $anoselecionado)
    {
        $calendario = '';
        $dia = 1;
        $semana = [];
        $cont = 0;

        while ($cont < date('w', strtotime(date("$anoselecionado-$nummes-1"))))
        {
            array_push($semana, null);
            $cont++;
        }

        while ($dia <= date("t"))
        {
            array_push($semana, $dia);

            if (count($semana) == 7)
            {
                $calendario .= linha($semana, $nummes, $anoselecionado);
                $semana = [];
            }   
            $dia++;
        }
        $calendario .= linha($semana, $nummes, $anoselecionado);
        return $calendario;

    }
    function submitForm()
    {

    }
?>

<body>
    <div class="titulo">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <label for="anos">Calendário: </label>
            <select name="anos" id="anos">
                <?php 
                    for ($i = 0; $i < 11; $i++)
                    {
                        $ano = date('Y', strtotime("+$i year"));
                        if ($ano == $anoselecionado)
                        {
                            echo "<option value='$ano' selected>$ano</option>";
                        }
                        else
                        {
                            echo "<option value='$ano'>$ano</option>";
                        }
                    }
                ?>
            </select>
            <input class="botao" type="submit" value="Selecione">
        </form>
    </div>
    <div class="calendario">
        <?php
            for ($i = 0; $i < 12; $i++)
            {
                $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
                $mesatual = $meses[$i];
                echo "
                <table>
                    <thead>
                        <tr><th colspan='7'>$mesatual</th></tr>
                        <tr>
                            <th>Dom</th>
                            <th>Seg</th>
                            <th>Ter</th>
                            <th>Qua</th>
                            <th>Qui</th>
                            <th>Sex</th>
                            <th>Sab</th>
                        </tr>
                    </thead>
                    <tbody>
                        " . calendario($i+1, $anoselecionado) . "
                    </tbody>
                </table>";
            }
        ?>   
    </div>
</body>
</html>