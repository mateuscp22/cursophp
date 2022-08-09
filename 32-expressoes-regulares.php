<?php

/**
 * Expressões regulares
 * Define um padrão a ser usado para procurar ou substituir palavras ou
 * grupos de palavras.
 * ^:  inicio da expressão,
 * $:  final da expressão
 * /i: case sensitive
 * []: conjunto de caracteres
 * {}: ocorrênca
 * ?:  nenhuma ou uma ocorrencia {0,1} 
 * *:  nenhuma ou várias ocorrencias {0,} 
 * +:  uma ou mais ocorrencias {1,}
 * /^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i
 * /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
 */

//$string = "SDFdf564";
//$padrao = "/^a/";
//$padrao = "/a$/";
//$padrao = "/^[a-z0-9]{10}$/i";
//$padrao = "/^[a-z0-9]?$/i"; - /**Aceita uma ou nenhuma ocorrencia  */
//$padrao = "/^[a-z0-9]*$/i"; - /**Nenhuma ou várias ocorrencias */
//$padrao = "/^[a-z0-9]+$/i"; - /**Uma ou mais ocorrencias*/

//Exemplo-01
//$string = "mateuscandicocp@gmail.com";
//$padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i";

//Exemplo-02
$string = "09/08/2022";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";

if (preg_match($padrao, $string)) :
    echo "Valido";
    echo "<hr>";
    echo $string;
else :
    echo "Invalido";
    echo "<hr>";
endif;
