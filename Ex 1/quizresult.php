<?php

session_start();

if(!isset($_SESSION['loggedin'])){
	$_SESSION['loggedin'] = false;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<meta charset="UTF_8">
	</head>
	<body>
		<center>
			<fieldset>
				<?php
					if($_SESSION["loggedin"] == true){
				?> 
					
				<legend>Quiz Result</legend>
				<h2> Your Socre : <?php echo $_SESSION['score']; ?></h2>
				<?php }else{
					header('Location: /Internet Programming/Ex 1/quiz.php');
				}?>			
			</fieldset>
		</center>
		
	</body>
</html>
