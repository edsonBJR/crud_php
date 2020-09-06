<!DOCTYPE html>
<html lang="en">
<head>
	<title>Validacoes - PHP</title>
</head>
<body>

	<h1>Validações de dados de Formulários - PHP</h1>

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
	 <?php 
	 if(isset($_POST['enviar-formulario'])):
	 	// Array de erros
		$erros = array();

		// Validações
		if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
			$erros[] = "Idade não é um inteiro";
		endif;

				if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
			$erros[] = "Email inválido";
		endif;

				if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
			$erros[] = "Peso precisa ser um float";
		endif;

				if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
			$erros[] = "Ip inválido";
		endif;

				if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
			$erros[] = "Url inválida";
		endif;

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

			Idade: <input type="text" name="idade"><br>
			Email: <input type="text" name="email"><br>
			Peso: <input type="text" name="peso"><br>
			IP: <input type="text" name="ip"><br>
			URL: <input type="text" name="url"><br>
		
			<button type="submit" name="enviar-formulario">Enviar</button>

	</form>
	
</body>
</html>