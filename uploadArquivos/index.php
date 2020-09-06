<!DOCTYPE html>
<html lang="en">
<head>
	<title>Upload de Arquivos</title>
</head>
<body>

<?php 
// var_dump($_FILES);
// Verificar se o botao enviar-formulario foi clicado
if(isset($_POST['enviar-formulario'])):
	// Criando um array com os formatos permitidos
	$formatosPermitidos = array("png", "jpeg", "jpg", "gif");
	$quantidadeArquivos = count($_FILES['arquivo']['name']);
	$contador = 0;

	while ($contador < $quantidadeArquivos): 

		$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
		
		if(in_array($extensao, $formatosPermitidos)):
			$pasta = "arquivos/";
			$temporario = $_FILES['arquivo']['tmp_name'][$contador];
			$novoNome = uniqid().".$extensao";

			if(move_uploaded_file($temporario, $pasta.$novoNome)):
				echo "Upload feito com sucesso para $pasta$novoNome<br>";
			else:
				echo "Erro ao enviar o arquivo $temporario<br>";
			endif;

		else: 
			echo "Extensão não é permitida.<br>";
		endif;
		$contador ++;
	endwhile;

endif;

?>

<h1>Upload de Arquivos</h1>


<!-- Aqui temos um formulário que aceita apenas um arquivo por vez para ser enviado -->
<h3>Envio de 1 arquivo apenas</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" 
	enctype="multipart/form-data">

	<input type="file" name="arquivo"><br>
	<input type="submit" name="enviar-formulario">
</form>	

<!-- Agora outro formulario que possibilita o envio de multiplos arquivos, guardando eles dentro de um array -->
<h3>Envio de Multiplos Arquivos</h3>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
	enctype="multipart/form-data">
	<input type="file" name="arquivo[]" multiple><br>
	<input type="submit" name="enviar-formulario">
</form>

</body>
</html>