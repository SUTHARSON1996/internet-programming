<?php
	require 'conn.php';
?>
	<?php
		session_start();
		$user='';
		$mail =  mysqli_real_escape_string($db, $_POST['mail']);
		$pass =  $_POST["password"];
	
		$statement = "SELECT * FROM Registration WHERE email = '$mail'";
		if($result = mysqli_query($db,$statement)){
		
			$row_cnt = mysqli_num_rows($result);
			$row = mysqli_fetch_array($result);
			if($row_cnt == 1 && $row['password']==$pass){
				$_SESSION['username'] = $row['name'];	
				$_SESSION['loggedin'] = true;
 				header('Location: /Internet Programming/Ex 1/ex1.php');		
			}else{
				die ("error logging please retry");
			}
		}
	?>

