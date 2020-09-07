<?php 
// Iniciamos a Sessão para pode utilizar os dados dessa sessão em outros arquivos
session_start();

echo "<h1>A sessão está sendo iniciada no arquivo index.php</h1>";

echo $_SESSION['cor']."<br>".
	$_SESSION['carro']."<br>".
	session_id();

 ?>