<?php 

// Testes diversos
// Funções para Strings
/*

	number_format -> formata o número segundo os padrões que informarmos
	round -> arredonda os números para um valor abaixo ou para um valor acima dependendo da casa decimal .5 arredondará para cima
	ceil -> sempre irá arredondar os números para um valor acima 5.0000001 será 6
	floor -> 
	rand -> gera um número aleatório dentro de um range informado

*/

	$db = 1234561234.56;

	// Aqui conseguimos formatar com duas casas decimais, virgula e o ponto para milhares e assim por diante os valores maiores
	$preco = number_format($db, 2, ",", "."); 

	echo "o valor do produto é R$ $preco";

	echo "<hr>";

	echo round(3.49); // Arredonda para 3

	echo "<hr>";

	echo round(3.50); // Arredonda para 4

	echo "<hr>";

	echo round(3.51); // Arredonda para 4

	echo "<hr>";

	echo ceil(5.0000001); // Arredonda para 6

	echo "<hr>";

	echo ceil(5.9); // Arredonda para 6

	echo "<hr>";

	echo floor(5.999999999999999); // Arredonda o numero para baixo se no caso passar 5.9 o valer será 5

	echo "<hr>";

	echo rand(2, 20); // Exibe um valor aleatório dentro do range informado

 ?>