<?php 
// Incluindo o arquivo de conexão com o banco de dados
require_once 'db_connect.php';

// Utilizando sessão para guardar a sessão do usuario que logou no sistema conectado ao banco de dados
session_start();

// Botão enviar, checando se foi clicado
if (isset($_POST['btn-entrar'])):
	// Criando um array para o caso de ter alguma erro quando clicar no botão btn-entrar
	$erros = array();

	// Aqui estamos pegando os dados que foram digitados no formulario nos campos login e senha com a função mysqli_escape_string
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	// Agora vamos verificar se os campos estão em branco
	if(empty($login) or empty($senha)):
		// Aqui estamos guardando um provável erro dentro de um array que criamos de nome erros
		$erros[] = "<li>O campo login/senha precisam ser preenchidos.</li>";
	else:
		// Aqui estamos criando um query sql para verificar se o login enviado pelo formulario é igual a algum login no banco de dados
		$sql = "SELECT login FROM usuarios WHERE login = '$login'";

		// Agora vamos guardar em uma variável o resultado da consulta que fizemos acima, utilizamos a função mysqli_query()
		$resultado = mysqli_query($connect, $sql);

		// Agora vamos verificar quantas ocorrẽncias do login foram encontradas no banco de dados, função mysqli_num_rows()
		if(mysqli_num_rows($resultado) > 0):
			$senha = md5($senha);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);

				if(mysqli_num_rows($resultado) == 1):
					// Aqui a função converte a variável em um array e atribui a variável $dados
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($connect); // O resultado da query está guardado em uma variável, lembrar de fechar a conexão
					//Aqui já vamos criar a sessão
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					// Agora vamos redirecionar o usuario logado para a página restrita
					header('Location: home.php');

				else:
					$erros[] = "<li>Usuário e senha não conferem.</li>";
				endif;
		else:
			$erros[] = "<li> Login inexistente.</li>";
		endif;
	
	endif;

endif;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema de Login</title>
</head>
<body>
		<h1>Login</h1>

		<?php 

		if(!empty($erros)):
			foreach($erros as $erro):
				echo $erro;
			endforeach;
		endif;

		?>
		<hr>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			Login: <input type="text" name="login"><br>
			Senha: <input type="password" name="senha"><br>
			<button type="submit" name="btn-entrar">Entrar</button>
		</form>
</body>
</html>