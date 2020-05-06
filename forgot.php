<!DOCTYPE html>
<html>
<head>
	<title>Recuperação de senha - Postit2000</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<link rel="stylesheet" type="text/css" href="style.css">
	<img src="resources/logo.png" height="100" width="200"> 
	<br>
	<br>
	<br>

	<?php 

	include'conn.php';
	$sql = "SELECT email,senha FROM users";
	$result = mysqli_query($conn, $sql);
	
	while ($registros = mysqli_fetch_assoc($result))
				{
						foreach ($registros as $indice => $valor)
					{
						echo "<b>".$indice.":</b> " . $valor . "<br/>";
					}
					echo '<br/>';	
				}
	 ?>

	 <button onclick="window.location.href = 'index.php';">Voltar</button>

	

</body>
</html>