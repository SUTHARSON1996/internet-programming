<?php require 'conn.php' ?>


<?php 

	$term = $_GET["term"];

	$sqlstm = "SELECT  * FROM faq WHERE question LIKE '" . $term ."%'";
	$result = mysqli_query($db,$sqlstm);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			echo "<p>".$row['question']."</p>";
		}
		mysqli_free_result($result);
	}else{
		echo "<p>No suggestions</p>";

	}
?>
