<?php
/**
 * Operadores Aritimeticos
 * São usados com valores numéricos para executar operações
 * atitiméticas comuns, como: adição, suvtração, multiplicação, etc.
 * 
 */
/*
//Adição: +
echo 10 + 5;
//Subtração: -
echo 15 - 5;
//Multiplicação: *
echo 3 * 5;
//Divisão: /
echo 15 / 5;
//Módulo: %
echo 15 % 5;
//Exponenciação: **
echo 3 ** 5;
*/

$a = 10;
$b = 20;
$c = 30;
$d = 5;
$e = 16;

$adicao = $a + $b;
echo $adicao;
echo "<hr>";

$subtracao = $c - $a;
echo $subtracao;
echo "<hr>";

$multiplicacao = $d * $a;
echo $multiplicacao;
echo "<hr>";

$divisao = $c / $a;
echo $divisao;
echo "<hr>";

$modulo = $e % $d;
echo $modulo;
echo "<hr>";

$expo = $a ** $d;
echo $expo;

//Média
echo (4 + 6 + 7 + 9)/4;
?>