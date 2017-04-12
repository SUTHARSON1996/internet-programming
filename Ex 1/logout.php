<?php
	session_start();
	$_SESSION['loggedin'] = false;
	header('Location: /Internet Programming/Ex 1/ex1.php');		
?>
