<?php
$senha = "123456";
//base 64
$novasenha  = base64_encode($senha);
echo "base64: ".$novasenha. "<br>";
echo "Sua senha é: ". base64_decode($novasenha);
echo "<hr>";

//Md5
echo "Md5: ".md5($senha);
echo "<hr>";

//Sha1
echo "Sha1: ".sha1($senha); 