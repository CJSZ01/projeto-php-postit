<?php session_start();

	// limpar as variaveis de sessao:
	unset($_SESSION['ID']);
	unset($_SESSION['senha']);
	unset($_SESSION['email']);
	session_destroy();
	
	header("location:login.php");
?>