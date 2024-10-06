<?php 
session_start();
include 'banco.php';
include '../helpers/auxiliares.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['servico']) && !empty($_POST['servico']) && isset($_POST['date']) && !empty($_POST['date']) && isset($_POST['time']) && !empty($_POST['time'])) {
    $agendamento = [
        'servico' => mysqli_real_escape_string($conexao, trim($_POST['servico'])),
        'date' => mysqli_real_escape_string($conexao, trim($_POST['date'])),
        'time' => mysqli_real_escape_string($conexao, trim($_POST['time']))
    ];

    if (verificar_login($conexao, $login)['success']) {
        header('Location: ../views/form_agendamento.php');
        $_SESSION['usuario_logado'] = true;
    } 
    else 
    {
        $_SESSION['error_message'] = "Usuário ou senha incorretos.";
        header('Location: ../views/form_login.php');
    }
    
} 
exit();