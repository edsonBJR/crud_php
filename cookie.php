<?php 

//COOKIE

setcookie('user', 'Edson Barbosa Junior', time()+3600);
setcookie('email', 'ebjr.tux@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);

 ?>