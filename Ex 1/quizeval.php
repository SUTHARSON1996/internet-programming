<?php require 'conn.php' ?>
<?php
	session_start();
	
	$id = $_SESSION['id'];
	if($id <= 5){
		$statement = "select * from quiz where id = ".$id;

		$result = mysqli_query($db,$statement);
	
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_array($result);
			if(strcmp($row['correct'] , $_POST['option']) == 0 ){
				$_SESSION['score'] = $_SESSION['score'] + 2;
				$_SESSION['id'] = $_SESSION['id'] + 1; 
			}else{
				$_SESSION['score'] = $_SESSION['score'] - 1;
				$_SESSION['id'] = $_SESSION['id'] + 1; 
			}
			header('Location: /Internet Programming/Ex 1/quiz.php');
		}
	}else{
			header('Location: /Internet Programming/Ex 1/quizresult.php');
	}
?>
