<?php
//Manipulação de Arquivos
/**
 * fopen()
 * fclose()
 * fwrite()
 * !feof()
 * fgets()
 * filesize()
 */

$arquivo = 'arquivo.txt';
$conteudo = "Contatudo de teste\r\n";

$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r');
//fwrite($arquivoAberto, $conteudo); /** escreve um contedo no documento */
while (!feof($arquivoAberto)) :
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha . "<br>";
endwhile;

fclose($arquivoAberto);
