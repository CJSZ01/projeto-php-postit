<!DOCTYPE html>
<html>
<head>
	<title>
		Usuários - Postit2000
		</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<link rel="stylesheet" type="text/css" href="style.css">
	<img src="resources/logo.png" height="100" width="200"> 

<a href="index.php">Voltar</a> <br>

<?php 
include 'conn.php';

$sql="SELECT email,senha,id FROM users";
$result = mysqli_query($conn,$sql);
$linhas = mysqli_affected_rows($conn);

if ($linhas > 0)
			{
				
				while ($registros = mysqli_fetch_assoc($result))
				{
											
					foreach ($registros as $indice => $valor)
					{
						echo "<b>".$indice.":</b> " . $valor . "<br/>";
					}
					echo '<br/>';

				} 
				
	
			}
			else
			{
				echo "<h2>Não há usuários cadastrados ainda</h2>";
			}

 ?>

</body>
</html>