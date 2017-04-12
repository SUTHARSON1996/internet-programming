<?php
	session_start();
	$_SESSION['loggedin'] = false;
	$_SESSION['score'] = 0;
	$_SESSION['id'] = 1;
	header('Location: /Internet Programming/Ex 1/quiz.php');		
?>
