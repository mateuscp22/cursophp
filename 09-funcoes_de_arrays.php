<?php
/* 
 * is_array($array) = verifica se uma determinada variável é um array.
 * in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
 * array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
 * array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
 * array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
 * array_pop($array) = exlui a ultima posição do array.
 * array_shift($array) = exclui a primeira posição do array.
 * array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
 * array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
 * array_combine($keys, $values) = mescla os dois arrays passados.
 * array_sum() = calcula a soma dos elementos de array.
 * explode("/", "20/01/2001") = transforma strings em array.
 * implode("-", $array) = transforma array em string.
 */

$nomes = array("Eu"=> "Mateus", "Pai"=> "Marcos", "Amigo"=> "Lucas", "Primo"=> "João");

//is_array($array) = verifica se uma determinada variável é um array.
//echo is_array($nomes);
var_dump(is_array($nomes));
if(is_array($nomes)):
    echo "E um Array";
else:
    echo "Não é um Array";
endif;
echo"<hr>";

//in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array.
//echo in_array("Mateus",$nomes);
if(in_array("Mateus", $nomes)):
    echo "Existe no Array";
else:
    echo "Não existe no Array";
endif;
echo"<hr>";

//array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
$keys = array_keys($nomes);
print_r($keys);
echo"<hr>";

//array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
$values = array_values($nomes);
print_r($values);
echo"<hr>";

//array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
$carros = array("Camaro", "Uno", "Gol");
$motos = array("XTZ", "CB300", "XRE");

$veiculos = array_merge($carros, $motos);
print_r($veiculos);
echo"<hr>";

//array_pop($array) = exlui a ultima posição do array.
print_r($carros);
echo "<br>";
echo array_pop($carros);
echo "<br>";
print_r($carros);
echo"<hr>";

//array_shift($array) = exclui a primeira posição do array.
print_r($carros);
echo "<br>";
echo array_shift($carros);
echo "<br>";
print_r($carros);
echo"<hr>";

//array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
$frutas = array("uva", "laranja", "maça");
print_r($frutas);
array_unshift($frutas, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas);
echo"<hr>";

//array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
$frutas1 = array("uva", "laranja", "maça");
print_r($frutas1);
array_push($frutas1, "manga", "acerola", "morango");
echo "<br>";
print_r($frutas1);
echo"<hr>";

//array_combine($keys, $values) = mescla os dois arrays passados de acordo com os indices.
$keys1 = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Bota Fogo");

$times = array_combine($keys1, $values);
print_r($times);
echo "<hr>";

//array_sum() = calcula a soma dos elementos de array.
$soma = array(5,6,10,8);
echo array_sum($soma);
echo "<br>";
//variavel $total recebe o valor do "array_sum" $soma 
$total = array_sum($soma);
echo $total;;
echo "<hr>";

//teste soma
echo "Teste Soma:";
//soma dos valores dos indices do array
$valores = array("Valor1" => 10, "Valor2" => 20, "Valor3" => 15,"Valor4" => 15);
echo array_sum($valores);

echo "<hr>";

//explode("/", "20/01/2001") = transforma strings em array.
$data = "15/09/2021";
$novaData = explode("/", $data);
print_r($novaData);
echo "<br>";

$frase = "meu nome não é Jhonny";
$novaFrase = explode(" ",$frase);
print_r($novaFrase);
echo "<hr>";

//implode("-", $array) = transforma array em string.
$nome = array("Mateus", "Marcos", "Lucas", "João");
$string = implode(", ", $nome);
echo $string;
echo "<hr>";

?>
