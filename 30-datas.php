<?php
//Datas
/*
echo date('d');
echo date('D') . "<br>";
echo date('m') . "<br>";
echo date('M') . "<br>";
echo date('y') . "<br>";
echo date('Y') . "<br>";
echo date('h:i:s') . "<br>";
echo date('H:I:S') . "<br>";
echo date('H:I:S A') . "<br>";

echo date('d/m/y H:i:s') . "<br>";
*/

date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/y H:i:s a');
echo "<hr>";

$date = date('Y-m-d'); // Date
echo $date;
echo "<br>";

$datetime = date('Y-m-d H:i:s'); // DateTime
echo $datetime;
echo "<br>";

//Time
echo time();
echo "<br>";

$time = time();
echo date('d/m/Y', $time);
echo "<br>";
echo "<hr>";

//MKTime
$data_pagamento = mktime(15, 30, 00, 02, 15, 2025);
echo date('d/m/y - h:i', $data_pagamento);
echo "<br>";
echo "<hr>";

//STRTOTime
//Converter data formato string para time
$data = '2022-08-09 13:30:00';
$data = strtotime($data);

echo date('d/m/y', $data);
