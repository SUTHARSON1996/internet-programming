<?php require 'conn.php' ?>


<?php 

	$term = $_GET["term"];

	$sqlstm = "SELECT  * FROM faq WHERE question LIKE '" . $term ."%'";
	$result = mysqli_query($db,$sqlstm);
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_array($result);
		if($row){
			echo "<p>".$row['answer']."</p>";
		}
		mysqli_free_result($result);
	}else{
		echo "<p>No suggestions</p>";

	}
?>
