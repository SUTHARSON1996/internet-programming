<?php
	require 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="container-fluid">
	<?php
		$name =  mysqli_real_escape_string($db, $_POST['name']);
		$mail =  mysqli_real_escape_string($db, $_POST['mail']);
		$pass =  mysqli_real_escape_string($db, $_POST['password']);
	
		$statement = "INSERT INTO Registration VALUES ('$mail','$pass','$name')";
		if(mysqli_query($db,$statement)){
			echo '<center><h1>SUCCESSFULLY INSERTED INTO DATABASE</h1></center>';
			echo '<h2>'.$name.'</h2>';			
			echo '<br/>';
			echo '<h2>'.$mail.'</h2>';
			echo '<br/>';
			echo '<h2>'.$pass.'</h2>';
		}else{
			echo "error inserting";
		}
	?>
 	</div>


</body>
</html>

