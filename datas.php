<?php 

echo "<hr>";

// Configurando o TimeZone
date_default_timezone_set('America/SaoPaulo');

// Datas
echo date('d')."<br>"; // Dia Literal
echo date('D')."<br>"; // Dia da Semana

echo date('m')."<br>"; // Mês Literal
echo date('M')."<br>"; // Nome do MÊs no Ano

echo date('y')."<br>"; // Ano com os dois digitos finais
echo date('Y')."<br>"; // Ano com os quatro digitos

echo date('d/m/y')."<br>"; // Data completa
echo date('D - M - Y')."<br>"; // Data completa com o ano com 4 digitos

echo date('d/m/Y - h:i:s')."<br>"; // DAta com hora, minuto e segundo
echo date('d/m/y - H:i:s')."<br>"; // Data com hora formato 24 horas, minuto e segundo

echo date('d/m/y - h:i:s A')."<br>"; // Data com hora, minuto e segundo e o AM ou PM no final
 
// Armazenar data no banco de dados
$data = date('Y-m-d');
echo $data."<br>";

// Armazenar no banco de dados com DateTime
$datatime = date('Y-m-d H:i:s');
echo $datatime."<br>";

// Trabalhando com timestamp
echo time()."<br>"; // O tempo desde 1970 em milisegundos

$time = time();
echo date('d/m/Y', $time)."<br>";

// Trabalhando com o mktime() para criar datas
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m - h:i', $data_pagamento)."<br>";

// Recebendo uma data do banco de dados e formatando ela com o STRTOTIME()
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y H:i:s', $data);

 ?>