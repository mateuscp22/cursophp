<?php
//Superglobais
/*
* $GLOBALS
* $_SERVER
* $_REQUEST
* $_POST
* $_GET
* $_FILES
* $_ENV
* $_COOKIE
* $_SESSION
*/

$x = 10;
$y = 15;

/* $GLOBALS — Referencia todas variáveis disponíveis no escopo global

Descrição:
Um array associativo contendo referências para todas as variáveis que estão atualmente definidas no 
escopo global do script. O nome das variáveis são chaves do array. */
function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";

// $_SERVER -- $HTTP_SERVER_VARS [obsoleto] — Informação do servidor e ambiente de execução
// $_SERVER é um array contendo informação como cabeçalhos, paths, e localizações do script.
//          As entradas neste array são criadas pelo servidor web. 
//          https://www.php.net/manual/pt_BR/reserved.variables.server.php
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

echo "<hr>";

