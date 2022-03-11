<?php
/*
$a == $b	Igual	Verdadeiro (true) se $a é igual a $b.
$a === $b	Idêntico	Verdadeiro (true) se $a é igual a $b, e eles são do mesmo tipo.
$a != $b	Diferente	Verdadeiro se $a não é igual a $b.
$a <> $b	Diferente	Verdadeiro se $a não é igual a $b.
$a !== $b	Não idêntico	Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo (introduzido no PHP4).
$a < $b	Menor que	Verdadeiro se $a é estritamente menor que $b.
$a > $b	Maior que	Verdadeiro se $a é estritamente maior que $b.
$a <= $b	Menor ou igual	Verdadeiro se $a é menor ou igual a $b.
$a >= $b	Maior ou igual	Verdadeiro se $a é maior ou igual a $b.
$a <=> $b	Spaceship (nave espacial)	Um integer menor que, igual a ou maior que zero quando $a é, 
                                        respectivamente, menor que, igual a ou maior que $b. 
                                        Disponível a partir do PHP 7.
*/

if(10 == 10):
    echo "Positivo";
else:
    echo "Negativo";
endif;

echo "<hr>";

var_dump(20 <=> 30);