<?php include("cabecalho.php"); ?>
<?php if (isset($_GET["login"]) && $_GET["login"] == true){ ?>
	<p class="alert-success">Logado com sucesso!</a>
<?php }?><!--No php somente 0 ou vazio é considerado false, pois false na url passado no bulean sera considerado true!-->
<?php if (isset($_GET["login"]) && $_GET["login"] == false){ ?>
	<p class="alert-danger">Usuario ou senha invalido</a>
<?php }?>


            <h1>Bem vindo!</h1>
            <h2>Login</h2>
            <form action="login.php" method="post">
	            <table class="table">
	            	<tr>
	            		<td>Email</td>
	            		<td><input class="form-control" type="email" name="email"></td>
	            	</tr>
	            	<tr>
	            		<td>Senha</td>
	            		<td><input class="form-control" type="password" name="senha"></td>
	            	</tr>
	            	<tr>
	                  		<td><button class="btn btn-primary">Login</button></td>
	            	</tr>
	            </table>
            </form>
<?php include("rodape.php"); ?>