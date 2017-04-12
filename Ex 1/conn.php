<?php
	$url = 'localhost';
	$user_name = 'root';
	$password = '';
	$database_name = 'Internet Programming';

	
	$db = mysqli_connect($url,$user_name,$password,$database_name)
	or die('error connection to mysql server...');

?>



