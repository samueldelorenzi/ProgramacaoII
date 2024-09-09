<?php

$bdServidor = 'Localhost';
$bdUsuario = 'root';
$bdSenha =  'root';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

buscar_tarefas($conexao);

// funcao que busca os registros no banco
function buscar_tarefas($conexao)
{
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

    while ($tarefa = mysqli_fetch_assoc($resultado))
    {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}
