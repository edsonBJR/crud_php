<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario</title>
</head>
<body>

	<?php 
	// Trabalhando com os métodos POST e GET, o primeiro envia dados para um arquivo .php por exemplo, no cabeçalho do pacote http e o segundo
	// envia os dados pela url 
	/*
	Agora vamos trabalhar com Validações no formulários para validar os dados enviados para o arquivo que irá processa-los
	Funçoes (filter_input - filter_var)
	FILTER_VALIDATE_INT
	FILTER_VALIDATE_EMAIL
	FILTER_VALIDATE_FLOAT
	FILTER_VALIDATE_IP
	FILTER_VALIDATE_URL
	*/
	 ?>
	

	<form action="dados.php" method="GET">
		<h1>Fomulario de Cadastro</h1>
		Nome: <input type="text" name="nome"><br>
		Email: <input type="email" name="email"><br>
		<button type="submit">Enviar</button>
	</form>

	<a href="dados.php?idade=25&sobrenome=Barbosa">Enviar Dados</a>

</body>
</html>