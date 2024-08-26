<?php
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

// data padrao
echo "Hoje é dia " . date('d/m/Y');
echo " e agora são " . date('h:i:s') . '<br>';
//Hoje é dia 15/08/2024 e agora são 08:41:42

/*
    desafios
    - na função date, substitua Y por y e observe o resultado
    - pesquise como exibir a hora no formato 12 horas (am pm)
    - exiba o nome do mes atual

    site oifical: php.net
*/

//data com y ao inves de Y
echo "Hoje é dia " . date('d/m/y') . '<br>';
//Hoje é dia 15/08/24


// am pm
echo "Agora são " . date('h:i:s a') . '<br>';
//Hoje é dia 15/08/2024 e agora são 08:43:38 pm

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

// nome do mes
$formatter = new IntlDateFormatter('pt_BR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, 'America/Sao_Paulo', IntlDateFormatter::GREGORIAN, 'MMMM');
echo "Estamos no mês de " . $formatter->format(new DateTime()) . '<br>';

/*
    ****** VARIAVEIS EM PHP ******
    Sempre procedidas de $ e n "ao podem conter caracteres especiais como: &, +, -, <, >, etc.
    $_variavel
    $variavel
    $_123
    $123

    Para atribuir um valor $variavel, utilizamos =, ex: 
    $carro = fusion;
    $cor = prata;
    Onde lemos: a variavel $carro recebe fusion como valor.

    ***** SUPERGLOBAIS (PALAVRAS RESERVADAS) ******
    $_GET, $_POST, $_FILES, $_SESSION, $_COOKIE, $_REQUEST, $_SERVER, ETC


    ***** OPERADORES *****

    Para realizacao de calculos aritmeticos utilizamos:
    (+) soma;
    (-) subtracao;
    (*) multiplicacao;
    (/) divisao;
    (%) resto.

    desafio 2
    utilizando variaveis e operados aritmeticos execute os seguintes calculos e imprima os resultados:
    - multiplique 10x20
    - calcule 18 % de 1900
    - utilizando a funcao de data, calcule a diferenca de dias entre as datas 28/02/2024 e hoje
*/

// 10 x 20
echo 10*20 . '<br>';
// 200

// 18% de 1900
$result = (1900/100)*18;
echo "$result<br>";
// 342

// diferenca entre 28/02/2024 e hoje
$date1 = date_create("2024-02-28");
$date2 = new DateTime();
$diff = date_diff($date1, $date2);
echo $diff->format("%r%a") ."<br>";
// 169
