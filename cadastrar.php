
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro - Postit2000</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
<body class="container-fluid">
	<link rel="stylesheet" type="text/css" href="style.css">
	
<center>	
<img src="resources/logo.png">
<form action="cadastrar.php" method="POST">

	
	<label> <b>E-mail</b></label>
	<input type="email" name="email">
<br>
	<label><b>Senha</b></label>
	<input type="password" name="senha">
<br>

	<label><b>Lí e aceito os <a href="termos.php">Termos de Serviço</a></b></label>
	<input type="checkbox" name="termos" value="1" required="1"> <br>

<br>
	<button type="submit">Cadastrar</button>
</form>
	<button onclick="window.location.href = 'index.php';">Voltar</button>
	</center>

	
	<?php 
	if(!empty($_POST['email']) && !empty($_POST['senha']))

	{
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		include 'conn.php';

		$sql = "INSERT INTO users (email,senha) VALUES ('$email','$senha')";
		$result = mysqli_query($conn,$sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			echo "Cadastrado com sucesso.";
			echo "<br>";
			echo ' <a href="login.php">Voltar</a>';
		}
		else
		{
			echo "shite";
		}
	}

	 ?>

</body>
</html>
