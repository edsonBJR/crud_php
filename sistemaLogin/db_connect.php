<?php 

// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "123r1xx@";
$db_name = "sistema_login";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()):
	echo "Falha na conexão" . mysqli_connect_error();
endif;

 ?>