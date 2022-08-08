<?php
//Arrays
$carros = array (1=>"BMW", 2=>"Veloster", 3=>"Hilux");
//print_r($carros);
//echo $carros [2];
//adicionando um item ao array sem indice
$carros[] = "Amarok";
//adicionando item ao array com indice 10
$carros[10] = "Camaro";
print_r($carros);
echo "<hr>";
echo $carros [10];
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda"; 
$motos[5] = "Suzuki"; 
//print_r($motos);
echo $motos[5];
echo "<hr>";

$clientes = ["Mateus", "João", "Fábio"];
print_r($clientes);
echo "<hr>";

//Count
echo count($carros);
echo "<br>";
echo count($motos);
echo "<br>";
echo count($clientes);
echo "<br>";
$totalClientes = count($clientes); //Atribuindo o valor do Array a uma variável
echo $totalClientes;
echo "<hr>";

//Foreach
//Percorre o Array, atribui a variavel valor, exibe o valor e salta uma linha para exibir o próximo
//para cada variavel no array $carros é atribuido a variavel $valor e o valor é exibido 
foreach($carros as $valor){ 
    echo $valor."<br>";
}
echo "<hr>";

//Arrays Associativos
$pessoa = array("nome" => "Mateus", "idade" => 22, "altura" => 1.70);
$pessoa["cidade"] = "Timóteo";
echo $pessoa["nome"]. "<br>";
print_r($pessoa);
echo "<hr>";

//Percorre o array $pessoa trazendo tbm o $indice e atribui para a variável $valor
foreach($pessoa as $indice => $valor){
    echo $indice. ":" .$valor. "<br>";
}
echo "<hr>";

//Arrays Multidimencionais
$times = array(
    "cariocas" => array("1º"=>"vasco", "2º"=>"flamengo", "3º"=>"botafogo"),
    "paulistas" => array("1º"=>"santos", "2º"=>"são paulo", "3º"=>"palmeiras"),
    "baianos" => array("1º"=>"bahia", "2º"=>"vitoria", "3º"=>"itabuna")
);
echo $times["paulistas"]["1º"];
echo "<hr>";

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice. ":" .$valor. "<br>";
}
echo "<hr>";

foreach($times["paulistas"] as $indice => $valor) {
    echo $indice. ":" .$valor. "<br>";
}
echo "<hr>";

foreach($times["baianos"] as $indice => $valor) {
    echo $indice. ":" .$valor. "<br>";
}
echo "<hr>";

?>