<?php
$senha = "123456";
//base 64
$novasenha  = base64_encode($senha);
echo "base64: " . $novasenha . "<br>";
echo "Sua senha é: " . base64_decode($novasenha);
echo "<hr>";

//Md5
echo "Md5: " . md5($senha);
echo "<hr>";

//Sha1
echo "Sha1: " . sha1($senha);
echo "<hr>";

//Password hash
$senha_db = '$2y$10$jhPTxKFpuyrk82G3JXJZeuK82DdK1MbHW/.0WZVYK/EdLHNYmzUyq';

$options = [
    'cost' => 10,
];
$senaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senaSegura."<br>";

if (password_verify($senha, $senha_db)) :
    echo "Senha Valida";
else :
    echo "Senha Invalida";
endif;
