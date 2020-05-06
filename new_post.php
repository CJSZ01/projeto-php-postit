<?php include 'lock.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Novo Post - Postit2000 </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body class="container-fluid">
	<link rel="stylesheet" type="text/css" href="style.css">
	
<?php include'menu.php' ?>
<form action="new_post.php" method="POST" id="newpost">
	<center>
	<br>
	<h1><b>Novo Post</b></h1>
	<br> 
	<label>Título</label>
	<input type="text" name="nome">
	<br>

	<label>Post</label>
	<textarea name="post" form="newpost"></textarea>
	<br>
	<button type="submit">Salvar</button>
	
</form>
<form action="index.php">
	<button type="submit">Voltar</button>
</form>
</center>

<?php  

	include'conn.php';

	if(!empty($_POST['nome']) && !empty($_POST['post']))
		{

			$nome = $_POST['nome'];
			$post = $_POST['post'];
			$ID = $_SESSION['ID'];
	
			$sql = " INSERT INTO posts (nome, post,ID) VALUES ('$nome','$post','$ID')";

			$result = mysqli_query($conn, $sql);
		}
 ?>

</body>
</html>


	
	
