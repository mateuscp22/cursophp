<?php
//Criando Funções 

function exibirNome($nome){
    echo "Meu nome é $nome";
}

exibirNome("Mateus CP");

echo "<hr>";

function calculoMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4 ) / 4;
    if($media >= 7):
        echo "$nome: Aprovado. Média: $media <br>";
    else:
        echo "$nome: Reprovado <br>";
    endif;
}

calculoMedia("CP", 5, 7, 9, 10);
calculoMedia("João", 5, 5, 3, 7);