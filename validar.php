<?php session_start(); // inicia a sess�o
	
	// recebe os dados do form de login:
	$email 	= $_POST['email'];
	$senha 	= $_POST['senha'];
	
	// incluir o arquivo de conex�o:
	include 'conn.php';
	
	// cria o comando sql:
	$sql = "SELECT * FROM users WHERE email = '$email'  
	AND senha = '$senha' ";

	// executa o comando sql
	$result = mysqli_query($conn, $sql);
	
	// verifica se foi executado corretamente
	$linhas = mysqli_affected_rows($conn);
	
	if ( $linhas > 0 ) // se maior que zero, encontrou um usuario com estes dados
	{
		// registra as vari�veis de sess�o:
		$usuario = mysqli_fetch_assoc($result);
		
		$_SESSION['ID']		= $usuario['ID'];
		$_SESSION['senha']  = $usuario['senha'];
		$_SESSION['email']	= $usuario['email'];
				
		header("location:index.php");
	}
	else // sen�o, n�o foi encontrado nenhum usuario com estes dados
	{
		// redireciona novamente para a pagina de login, informando tbm um cod de erro:
		header ("location:login.php?error=1");
		}
?>