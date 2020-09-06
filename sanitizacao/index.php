<!DOCTYPE html>
<html lang="en">
<head>
	<title>Validacoes - PHP</title>
</head>
<body>

	<h1>Validações de dados de Formulários - PHP</h1>
	<h2>Utilizando filter_input() e filter_var()</h2>
	<p>Para fazer as válidações e as limpezas dos inputs que estão preenchidos de forma incorreta!</p>

	<?php 
	// Trabalhando com os métodos POST e GET, o primeiro envia dados para um arquivo .php por exemplo, no cabeçalho do pacote http e o segundo
	// envia os dados pela url 
	/*
	
	Agora vamos ver como utilizar os filtros de sanitização, para limpeza de variáveis
	FUNCOES (filter_input - filter_var)
	FILTER_SANITIZE_SPECIAL_CHARS
	FILTER_SANITIZE_INT
	FILTER_SANITIZE_EMAIL
	FILTER_SANITIZE_URL

	*/
	?>

	 <?php
	 if(isset($_POST['enviar-formulario'])):
	 	// Array de erros
		$erros = array();

		// Sanitize
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		echo $nome."<br>";

		$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
		if(!filter_var($idade, FILTER_VALIDATE_INT)):
			$erros[] = "Idade precisa ser um inteiro"; 
		endif;
		echo $idade."<br>";

		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
			$erros[] = "Email inválido.";
		endif;
		echo $email."<br>";

		$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
		if(!filter_var($url, FILTER_VALIDATE_URL)):
			$erros[] = "URL inválida.";
		endif;
		echo $url."<br>";

		// Exibindo as mensagens que estão dentro do array
		if(!empty($erros)):
			foreach ($erros as $erro):
				echo "<li> $erro </li>";
			endforeach;
		else:
			echo "Parabéns, seus dados estão corretos!";
		endif;

	 endif;

	  ?>
	
	<!-- Aqui estamos utilizando uma Super Global para retornar o nome do proprio arquivo .php que irá processar o formulario -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

		Nome: <input type="text" name="nome"><br>
		Idade: <input type="text" name="idade"><br>
		Email: <input type="text" name="email"><br>
		URL: <input type="text" name="url"><br>
	
		<button type="submit" name="enviar-formulario">Enviar</button>

	</form>
	
</body>
</html>