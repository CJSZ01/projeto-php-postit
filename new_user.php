<!DOCTYPE html>
<html>
<head>
	<title>Cadastro - Postit2000</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<link rel="stylesheet" type="text/css" href="style.css">
	<img src="resources/logo.png" height="100" width="200"> 

<form action="new_user.php" method="post">
	
<center>Cadastro de usuário <br>

<label>E-Mail</label>
<input type="E-Mail" name="email">
<br>

<label>Senha</label>
<input type="password" name="senha">
<br>

<button type="submit">Cadastrar</button>

</form>

<form action="index.php">
	<button type="submit">Voltar</button>
</form>

<?php 
	
	if(!empty($_POST['email']) && !empty($_POST['senha']))
	{

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	include 'conn.php';
	
	$sql = "INSERT INTO users (email, senha) VALUES ('$email','$senha')";
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
		{
			echo "Deu bom";
		}
		else
		{
			echo '<h3 Deu ruim carai' . mysqli_error($conn) . '</h3>';
		}
	}
	

 ?>
</center>
</body>
</html>