<?php 

// Manipulação de Arquivos
/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize()
*/

$arquivo  = 'arquivo.txt';
$conteudo = "Conteudo de teste\r\n";

$arquivoAberto = fopen($arquivo, 'a'); // Modo 'a' é somente para escrita
$arquivoAberto = fopen($arquivo, 'r'); // Modo 'r' é somente para leitura
// fwrite($arquivoAberto, $conteudo);

$tamanhoArquivo = filesize($arquivo);

while (!feof($arquivoAberto)):
	$linha = fgets($arquivoAberto, $tamanhoArquivo);
	echo "<hr>";
	echo $linha."<br>";

endwhile;

fclose($arquivoAberto);


 ?>