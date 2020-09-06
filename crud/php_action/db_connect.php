<?php 

$servername = "localhost";
$username = "root";
$password = "123r1xx@";
$db_name = "crud_php";

// mysqli é procedural e o pdo é orientado a objetos
$connect = mysqli_connect($servername, $username, $password, $db_name);

// Para verificar qualquer erro lembrar de utilizar o var_dump as variáveis criadas.
if (mysqli_connect_error()):
	echo "Erro na conexão: " . mysqli_connect_error();
// else:
// 	echo "Conexão relizada com sucesso!";
// 	var_dump($connect);
endif;
 

 ?>