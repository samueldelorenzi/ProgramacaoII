<?php session_start();

    include "banco.php";
    include "auxiliares.php";

    if(array_key_exists("nome", $_POST) && $_POST['nome'] != "")
    {
        $tarefa = [];
        $tarefa["nome"] = $_POST["nome"];
        if(array_key_exists("descricao", $_POST))
        {
            $tarefa["descricao"] = $_POST["descricao"];
        }
        else
        {
            $tarefa["descricao"] = "";
        }

        $tarefa["prioridade"] = $_POST["prioridade"];

        if(array_key_exists("prazo", $_POST))
        {
            $tarefa["prazo"] = $_POST["prazo"];
        }
        else
        {
            $tarefa["prazo"] = "";
        }

        if(array_key_exists("concluida", $_POST))
        {
            $tarefa["concluida"] = 1;
        }
        else
        {
            $tarefa["concluida"] = 0;
        }

        gravar_tarefa($conexao, $tarefa);
    }

$lista_tarefas = buscar_tarefas($conexao);

include 'template.php';
