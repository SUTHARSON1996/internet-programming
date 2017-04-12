<?php 
session_start();
if(!isset($_SESSION['loggedin'])){
	$_SESSION['loggedin'] = false;
}
if(!isset($_SESSION['id'])){

	$_SESSION['id'] = 1;
}
if(!isset($_SESSION['score'])){
		
	$_SESSION['score'] = 0;
}


?>


<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<meta charset="UTF_8">
		<script src="jquery.min.js"></script>
		<script>
			<?php 
				if($_SESSION['loggedin'] == true){
					echo '
						
						$.get("getquizquestion.php").done(function(data){
							
							$(".quizsection").html(data);
							

						});

					';
				}
			?>

			

		</script>
			

		<script type="text/javascript">
			var timein = 60;
			var var1;
				<?php 
					if(($_SESSION['loggedin'] == true) && ($_SESSION['id'] <= 5)){
						echo '
							var1 = setInterval("updateTime()",1000);
							
							function updateTime(){
								timein--;
								if(timein<0){
									timein = 60;
										
									$.get("skipquizquestion.php",function(data){
							
										$(".quizsection").html(data);
							

									});

								}
								document.getElementById("time").innerHTML=timein;
						
							}
							';
					}					
				?>

		</script>


	</head>
	<body>
		<?php
			if($_SESSION['loggedin'] == false){
				echo "<center>";
				echo "<h1> Please Login to enter the quiz</h1>";
				echo "<br/>";
				echo "<a href='quizlogin.html'>LOG In</a>  <a href='register.html'>Register</a>";
			}else{
		?>
		
		<center>
			<h4>welcome <?php echo $_SESSION['username']?></h4>
		</center>

		<div id="timediv">
			<?php 
				if($_SESSION['id'] <= 5){
					echo '<span id="time_text">Time Left : </span><p id="time">60</p>';
				}else{
					echo '';			
				}
			?>
		</div>
		<center>
			<a href="quizlogout.php">logout</a>
			<fieldset>
				<legend>QUIZ</legend>
				<form method="post" action="quizeval.php">
					<div class="quizsection"></div>
					<?php if($_SESSION['id']<=5){
						echo '<input type="submit" value="next">';
					}else{
						echo '<input type="submit" value="get result">';
					}?>
				</form>
			</fieldset>
			
		</center>

		<?php
			}
		?>
	</body>
</html>
