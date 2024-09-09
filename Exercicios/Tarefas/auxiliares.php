<?php

function converte_concluida($concluida)
{
    if ($concluida == 1)
    {
        return 'Sim';
    }
    return 'Não';
}

function converte_prioridade($codigo)
{
    $prioridade = '';
    switch($codigo)
    {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
    }

    return $prioridade;
}

function converte_data_para_banco($data)
{
    if($data == '')
    {
        return '';
    }
    
    $dados = explode("/", $data);
    $data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

    return $data_mysql;
}

function converte_data_para_tela($data)
{
    if ($data == "" OR $data == "0000-00-00")
    {
        return "";
    }

    $dados = explode("-", $data);

    $data_tela = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

    return $data_tela;
}

function gravar_tarefa($conexao, $tarefa)
{
    $sqlGravar = "INSERT INTO tarefas(
        nome, descricao, prioridade, prazo, concluida
    )
    VALUES(
        '{$tarefa['nome']}',
        '{$tarefa['descricao']}',
        '{$tarefa['prioridade']}',
        '{$tarefa['prazo']}',
        '{$tarefa['concluida']}'
        )   
    ";

    $result = mysqli_query($conexao, $sqlGravar);
}