<?php
/*
Operadores de incremento e decremento

Servem para somar ou subtrair em (+1 ou -1)
qualquer valor do tipo numérico ou string.
*/

$valor = 20;

//Pré-incremento (incrementa o valor (+1) e retona na tela)
echo ++$valor;
echo "<br>";

//Pós-incremento (retorna o valor e só depois incrementa (+1))
$valor1 = 20;

echo $valor1++;
echo "<br>";
echo $valor1;
echo "<br>";

//Pré-decremento (decrementa o valor (-1) e retorna na tela)
$valor2 = 20;

echo --$valor;
echo "<br>";

//Pós-decremento (retorna o valor e só depois decrementa (-1))
$valor3 = 20;

echo $valor3--;
echo "<br>";
echo $valor3;
