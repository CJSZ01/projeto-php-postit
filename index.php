<?php include 'lock.php' ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home - PostIt2000 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<?php include'menu.php' ?>

<!-- <a href="index.php"> <b><?php echo $_SESSION['email']; ?> </b> </a>
ID:	<?php echo $_SESSION['ID']; ?>
<a href="new_post.php">Novo Post</a>
<a href="new_user.php">Novo Usuário</a>
<a href="posts.php">Posts</a>
<a href="users.php">Usuários</a>
<a href="logout.php">Sair</a>
<br>
<hr>
<br> --> 

<?php 
include 'conn.php';

$ID=$_SESSION['ID'];

$sql="SELECT nome, post FROM posts WHERE ID=$ID ORDER BY IDpost DESC LIMIT 10 ";
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