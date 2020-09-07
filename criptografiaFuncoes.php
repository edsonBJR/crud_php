<?php 

echo "<hr>";

$senha = "1234516";
$senha_db = '$2y$10$eSSa5zgfKbxJCfN5xRIrOOe4qQSlRtEabQ4Zp0TYLvCucfFONDjZu';

// Array de opões com o $options
$options = [
	'cost' => 10,
];

// Aqui estamos implementando uma senha mais segura com o algoritmo Bcrypt
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);

echo $senhaSegura;

echo "<hr>";

if(password_verify($senha, $senha_db)):
	echo "Senha válida";
else:
	echo "Senha inválida";
endif;

 ?>