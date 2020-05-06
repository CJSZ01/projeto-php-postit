<!DOCTYPE html>
<html>
<head>
	<title>Login - Postit2000</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body class="container-fluid">
	<link rel="stylesheet" type="text/css" href="style.css">
	

	<center>
<form action="validar.php" method="POST">
		<img src="resources/logo.png">
		<br>
	<label><b>E-Mail</b></label>
	<input type="email" name="email">
<br>
	<label><b>Senha</b></label>
	<input type="password" name="senha">

	<button type="submit">Login</button>
</form>

	<form action="cadastrar.php">
	<button type="submit">Cadastrar</button>
</form>
</form>

	<form action="forgot.php">
	<button type="submit">Esqueceu a senha?</button>
</form>

</center>

<?php 

if ( !empty($_GET['error']) )
		{
			$error = $_GET['error'];
			
			switch ($error)
			{
				case 1:
					echo '<h3>Email ou senha inválido</h3>';
					break;					
				case 2:
					echo '<h3><center>Digite seu email e senha</center></h3>';
					break;			
			}// fim switch
		
		}// fim if

 ?>

</body>
</html>