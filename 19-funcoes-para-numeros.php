<?php
//Funções para numeros
/**
 * number_format()
 * round()
 * ceil()
 * floor()
 * rand()
 */

 $db = 123456;
 $preço = number_format($db, 2, ",", ".");
 echo "O valor  do produto é R$ $preço"; 

 echo "<hr>";

echo round(3.55); //arredonda valores
echo ceil(3.1); //arredonda sempre para cima
echo floor(3.7); //arredonda sempre para baixo

echo "<hr>";

echo rand(1,20); //gera numeros aleatórios na faixa numerica determinada 