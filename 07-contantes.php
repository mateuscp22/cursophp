<?php
//Constantes - Valor não altera
//define ("Nome_da_constante" (sempre maiusculo), "valor_da_constente")
define("NOME", "Mateus CP");
//erro
/*define("NOME", "Mateus SP");*/
define("IDADE", 22);
define("ALTURA", 1.70);
define("CASADO", false);
define("TIMES", ['Vasco', 'Flamengo', 'Santos']);

var_dump(NOME);
var_dump(IDADE);
var_dump(ALTURA);
var_dump(CASADO);

echo "Meu nome é " .NOME. ", minha idade é " .IDADE. ", minha altura é " .ALTURA;
echo "<hr>";
echo TIMES[0];
echo "<br>";
echo TIMES[1];
echo "<br>";
echo TIMES[2];
echo "<hr>";

var_dump(TIMES);
echo "<hr>";

function exibeNome() {
    echo NOME;
}

exibeNome();
?>