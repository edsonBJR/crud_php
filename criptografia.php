<?php 

// Falar sobre base64, md5, sha1

echo "<hr>";

$senha = "admin@123";

$novaSenha = base64_encode($senha);
echo "base64: " . $novaSenha . "<br>";
echo "Sua senha é: ". base64_decode($novaSenha);

echo "<hr>";

echo "Sua senha MD5 é: " . md5($senha) . "<br>";

echo "<hr>";

echo "Sua senha SHA1 é: " . sha1($senha) . "<br>";

echo "<hr>";

 ?>