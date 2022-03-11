<?php
/**********  Escalares  **********/
//String
$nome = "Ola mindo 123";
var_dump($nome);
if (is_string($nome)):
    echo "É uma String";
else:
    echo "Não é uma String";
endif;
echo"<hr>";

//Int
$idade0 = 27;
$idade1 = -27;
$idade2 = 12.1;
var_dump($idade0, $idade1, $idade2);
if(is_int($idade0)):
    echo "É um Inteiro";
else:
    echo "Não é um Inteiro";
endif;
echo "<hr>";

//Float
$altura = 1.70;
var_dump($altura);
if(is_float($altura)):
    echo "É um Float";
else:
    echo "Não é um Float";
endif;
echo "<hr>";

//Boolean ou Bool
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo "É um Boolean";
else:
    echo "Não é um Boolean";
endif;
echo "<hr>";

/**********  Compostos  **********/
//Array
$carros = array("Gol", "Uno", "Camaro", 12, 20.1, true);
var_dump($carros);
if(is_array($carros)):
    echo "É um Array";
else:
    echo "Não é um Array";
endif;
echo "<hr>";


//Object
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Mateus"); 
var_dump($cliente);
if(is_object($cliente)):
    echo "É um Object";
else:
    echo "Não é um Object";
endif;
echo "<hr>";

/**********  Especiais  **********/
//NULL
$cidade = NULL;
var_dump($cidade);

//Resource - referencias a recursos externos

?>
