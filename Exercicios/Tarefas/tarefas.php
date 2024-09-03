<?php session_start();

    if(array_key_exists("nome", $_GET) && $_GET['nome'] != "")
    {
        $tarefa = [];
        $tarefa["nome"] = $_GET["nome"];
        if(array_key_exists("data", $_GET))
        {
            $tarefa["data"] = $_GET["data"];
        }
        else
        {
            $tarefa["data"] = "";
        }
        if(array_key_exists("prioridade", $_GET))
        {
            $tarefa["prioridade"] = $_GET["prioridade"];
        }
        else
        {
            $tarefa[""] = "";
        }
        if(array_key_exists("status", $_GET))
        {
            $tarefa["status"] = $_GET["status"];
        }
        else
        {
            $tarefa[""] = "";
        }

        $_SESSION['lista_tarefas'][] = $tarefa;
    }
    if (array_key_exists("lista_tarefas", $_SESSION))
    {
        $lista_tarefas = $_SESSION["lista_tarefas"];
    }
    else
    {
        $lista_tarefas = [];
    }

    include 'template.php';
