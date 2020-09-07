<?php 

// Para trabalhar com Sessão é necessário inicia-las
session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Veloster";

echo "<h1>Trabalhando com Sessoes - PHP</h1>";

echo $_SESSION['cor']."<br>".
	$_SESSION['carro']."<br>".
	session_id();

 ?>