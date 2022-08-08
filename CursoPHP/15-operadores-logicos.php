<?php
/*
Nome    Código       Exemplo     Reultado
E       (&& - and)   $a and $b   Verdadeiro (true) se tanto $a quanto $b são verdadeiros.
OU      (|| - or)    $a or $b    Verdadeiro se $a ou $b são verdadeiros.
OU      (xor)        $a xor $b   Verdadeiro se $a ou $b são verdadeiros, mas não ambos.
NEGAÇÃO (!)          ! $a        Verdadeiro se $a não é verdadeiro.
*/

$idade = 25;
$nome = "Mateus";

if(($idade == 22) && ($nome == "Mateus")):
    echo "Meu nome é $nome, e minha idade é $idade";
elseif ($idade <> 22 xor $nome <> "Mateus"): 
    echo "Dados incorretos <br> Nome: $nome <br> Idade: $idade";
endif;