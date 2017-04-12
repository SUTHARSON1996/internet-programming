<?php require 'conn.php' ?>

<?php
	session_start();
	
	$id = $_SESSION['id'];
	if($id <= 5){
		$statement = "select * from quiz where id = ".$id;

		$result = mysqli_query($db,$statement);
	
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_array($result);
			echo "<label for='question'>".$row['question']."</label><br/>";
			echo "<input type='radio' name='option' value='".$row['option1']."'/>".$row['option1']."<br/>";
			echo "<input type='radio' name='option' value='".$row['option2']."'/>".$row['option2']."<br/>";
			echo "<input type='radio' name='option' value='".$row['option3']."'/>".$row['option3']."<br/>";
			echo "<input type='radio' name='option' value='".$row['option4']."'/>".$row['option4']."<br/>";	

		}	
	

	}
?>
