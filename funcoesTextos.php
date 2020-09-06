<?php 

// Testes diversos
// Funções para Strings
/*

 	strtoupper - converter uma String em maiusculo
 	strtolower - converter uma String em minusculo
 	substr - retirar uma parte de uma String e retorna apenas o que sobra, passando mais um parametro inteiro determinamos até qual caractere a String será impressa
 	str_pad - utilizamos para acrescentar mais caracters na String e passamos quantos caracteres serão impressos
 	str_repeat - utilizamos para repetir uma String um determinado número de vezes
 	strlen - utilizamos para retornar quantos caracteres tem uma String
 	str_replace - utilizamos para substiuir uma String dentro de um texto ou uma string
 	strpos - 

*/

$nome = "edson barbosa junior";

echo "<hr>";

echo strtolower($nome);

echo "<hr>";

echo strtoupper($nome);

echo "<hr>";

$mensagem = "Olá mundo!";

echo substr($mensagem, 4, 4);

echo "<hr>";

$objeto = "mouse";
$novoObjetoA = str_pad($objeto, 8, "*");
$novoObjetoB = str_pad($objeto, 8, "*", STR_PAD_LEFT); // Para inserir os caracteres antes da String

echo $novoObjetoA;

echo "<hr>";

echo $novoObjetoB;

echo "<hr>";

$TextoA = str_repeat("Sucesso ", 5); // Passamos como parâmetro a string que queremos repetir e depois quantas vezes será repetido.
echo $TextoA;

echo "<hr>";

$TextoB = strlen("Olá mundo!");
echo $TextoB;

echo "<hr>";

$fraseA = "A seleção Argentina será campeã da Copa do Mundo de 2018";
$novaFraseA = str_replace("Argentina", "Alema", $fraseA);

echo $fraseA;

echo "<hr>";

echo $novaFraseA;

 ?>