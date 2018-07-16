<?php include("conecta.php");
include("banco-usuario.php");
include("logica-usuario.php");

$usuario = buscaUsuario($conexao,$_POST["email"],$_POST["senha"]);

// chama a variavel na tela var_dump($usuario);
if ($usuario == null) {//Utilizar 0 e 1 para passar parametro true e false, dessa forma o false se tornara 0//
	$_SESSION["danger"]= "Usuario ou senha invalido.";
	header("Location: index.php");
}else{
	$_SESSION["success"]= "Usuario logado com sucesso.";
    logaUsuario($usuario["email"]);
	header("Location: index.php");
	}
die();
