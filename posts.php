<?php include'lock.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Posts</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
<?php include'menu.php' ?>


<?php 
include 'conn.php';

$ID=$_SESSION['ID'];

$sql="SELECT nome, post FROM posts WHERE ID=$ID";
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
				echo "<h2>Não há posts feitos ainda</h2>";
			}

 ?>

</body>
</html>


