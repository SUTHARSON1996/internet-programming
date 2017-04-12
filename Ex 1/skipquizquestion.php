<?php
	session_start();

	if(isset($_SESSION['id'])){
		$_SESSION['id'] = $_SESSION['id'] + 1;
		header('Location: /Internet Programming/Ex 1/getquizquestion.php');	
	}

?>
