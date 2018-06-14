<?php include("conecta.php");
include("banco-usuario.php");

$usuario = buscaUsuario($conexao,$_POST["email"],$_POST["senha"]);
// chama a variavel na tela var_dump($usuario);
if ($usuario == null) {//Utilizar 0 e 1 para passar parametro true e false, dessa forma o false se tornara 0//
	header("Location: index.php? login=0");
}else{
	header("Location: index.php? login=1");
	}
die();