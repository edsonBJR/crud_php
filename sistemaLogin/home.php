<?php 

// Para a página do usuário logado precisamos importar a conexão e iniciar a sessão de conexão
require_once 'db_connect.php';

// Iniciando a Sessão
session_start();

// Verificação para restringir o acesso somente se o usuário estiver logado
if (!isset($_SESSION['logado'])):
	// Redirecionar para a página de login
	header('Location: index.php');
else:
endif;

// Agora vamos recuperar os dados do usuario
$id =$_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);  // O resultado da query está guardado em uma variável, lembrar de fechar a conexão
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Usuario Logado</title>
</head>
<body>

	<h1>Olá <?php echo $dados['nome']; ?></h1>
	<br>
	<a href="logout.php">SAIR</a>
	
</body>
</html>