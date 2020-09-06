<?php 

// Aqui criamos a função exibirNome
function exibirNome($nome) {
	echo "Meu nome é $nome";
}

// Aqui chamamos a função
exibirNome("Edson");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4) {
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	if($media >= 7) :
		echo "O aluno $nome, foi aprovado com a média $mediaFormatada " . number_format($media, 2, ",", ".") . " !!!";
	else:
		echo "O aluno $nome não foi aprovado.";
	endif;
}

calcularMedia("Enricco", 8, 9, 6, 7);

 ?>