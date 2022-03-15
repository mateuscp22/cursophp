<?php
/*
strtoupper() converte as letras para maiuscolo
strtolower() convertete as letras para minuculo
substr()
str_pad()
str_repeat()
strlen()
str_replace()
strpos()
*/

//strtoupper() converte as letras para maiuscolo
$nome = "mateus cândido pacheco";
$novoNome = strtoupper($nome);
echo "$novoNome";

echo "<hr>";

//strtolower() convertete as letras para minuculo
$nome1 = "MATEUS CANDIDO PACHECO";
$novoNome1 = strtolower($nome1);
echo "$novoNome1";

echo "<hr>";

//substr() Retorna uma parte de uma string
//substr(string $string, int $start, int $length = ?)
$mensagem = "Ola Mundo";
echo substr($mensagem, 4);

echo "<hr>";

//str_pad complementa outra string com a quantidade especificada
//str_pad(string $input, int $pad_length, string $pad_string = ?,int $pad_type = ? )
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "**");
echo $novoObjeto;

echo "<hr>";

//str_repeat() — Repete uma string
//str_repeat(string $input, int $multiplier)
$string = str_repeat("Sucesso! ", 5);
echo $string;

echo "<hr>";

//strlen() — Retorna o tamanho de uma string
//strlen(string $string)
$mensagem = "Ola mundo";
echo strlen($mensagem);

echo "<hr>";

//str_replace — Substitui todas as ocorrências da string de procura com a string de substituição
// str_replace(mixed $search, mixed $replace, mixed $subject, int &$count = ?)
$texto = "A seleção argentina será campeã da copa do mundo";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";

//strpos() - Encontra a posição da primeira ocorrência de uma string
//strpos(string $haystack, string $needle, int $offset = ?) 
echo strpos($texto, "copa");