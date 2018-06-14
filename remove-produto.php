<?php include("cabecalho.php");
include("conecta.php");
include("banco-produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);
header("Location: produto-lista.php?removido=true");
/*Sempre depois de um Location executar o die, pois mata o processo e evita quebra de segurança*/
die();
?>
