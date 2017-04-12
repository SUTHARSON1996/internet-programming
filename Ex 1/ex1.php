<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['loggedin'])){
	$_SESSION['loggedin'] = false;
}
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="Spiritualism Page" />
		<meta name="keyword" content="internet programming ex1" />
		<meta name="author" content="sutharson mathialagan,shiv shankar,suhanthan,Baskar"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Internet Programming</title>
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="main.css">
		<script src="../jquery.min.js"></script>
		<script src="../mainjq.js"></script>
	</head>
	<body>
		<section class="header">
			<div class="navbar navbar-inverse">
				<div class="container-fluid">
					<?php
						if($_SESSION['loggedin']){
							echo '<div class="navbar-header"><a class="navbar-brand" href="#"> Welcome '.$_SESSION['username'].'</a></div>';
						}
					?>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#main">Home</a></li>
						<li><a href="#sub">Basic concepts</a></li>
						<li><a href="yogatypes.html">Types of Yoga</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="quiz.php">QUIZ</a></li>
						<li><a href="register.html">Register</a></li>
						<?php 
							if(!$_SESSION['loggedin']){
								echo'<li><a href="login.html">Login</a></li>';
							}else{
								
								echo '<li><a href="logout.php">logout</a></li>';
							}

						?>
					</ul>				
				</div>
			</div>
		</section>
		<section id="main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-6">
						<img src="whatisyoga.jpg" width="100%" height="100%" />
					</div>
					<div class="col-xs-12 col-md-6">
						<h1>What is Yoga?</h1><br />
						<p class="textdecindex">Yoga is a group of <strong>physical, mental, and spiritual</strong> practices or disciplines which originated in ancient India.<br/><br/> There is a broad variety of Yoga schools, practices, and goals in Hinduism, Buddhism, and Jainism.<br/><br/> Among the most well-known types of yoga are Hatha yoga and Rāja yoga.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="sec-two-index" id="sub">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="center-align">Basics of yoga!!!</h1>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<h2 class="center-align">Yogic Concepts</h2><br/><br/>
						<p class="textdecindex"> In yogic culture human human body is considered to have <strong>72,000 nadis</strong> or pathways in which prana flows.<br/><br/>These 72 thousand nadis meet at 114 junctions.<br/><br/>These 114 juncions exchange their energy in 7 major points called <strong>chakras</strong></p>

					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<img src="chakra.png" width="100%" alt="7 chakras"/>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<h2 class="center-align">The 7 Chakras are</h2><br/><br/><br/>
						<ol class="textdecindex">
							<li>Muladhara</li>
							<li>Swathistana</li>
							<li>Manipuraka</li>
							<li>Anahata</li>
							<li>Visudhi</li>
							<li>Agana</li>
							<li>Sarashara</li>

						</ol>
					</div>
	
				</div>
				<div class="row">
					<div class="col-xs-12">
						<h2 class="center-align">Kundalini Yoga: The science of breaking limitations</h2><br/><br/>
						<strong><p class="textdecindex center-align"> All the yogic concepts work with the 7 chakras in different ways</p></strong>
						<p class="textdecindex center-align">All yoga in one way is towards that but Kundalini Yoga is particularly towards that. In fact, all life is towards that. In some way, people want to experience life more intensely than they are experiencing it right now. Someone wants to sing, someone else wants to dance, someone wants to drink alcohol, someone else wants to pray – why are they doing all this? They want to experience life more intensely. Everyone is trying to raise their kundalini but they are doing it haphazardly. When you approach it scientifically with a proper method, we say it is yoga.</p>
					</div>
					<div class="col-xs-12">
					<center>	<table border="5px" class="center-align">
							<tr>
								<th>Chakras</th>
								<th>Translation</th>
								<th>Power</th>
							</tr>
							<tr>
								<td>Swathistana</td>
								<td>Genetic chakra</td>
								<td>The enjoyement</td>
							</tr>							
							<tr>
								<td>Manipuraka</td>
								<td>Naval Chakra</td>
								<td>basic energy centre</td>

							</tr>
							<tr>
								<td>Anahata</td>
								<td>Solar plexis Chakra</td>
								<td>The basic activities</td>

							</tr>
							<tr>
								<td>Visudhi</td>
								<td>Solar plexis Chakra</td>
								<td>Vocal power</td>

							</tr>
							<tr>
								<td>Agna</td>
								<td>Solar plexis Chakra</td>
								<td>Trancending physical</td>

							</tr>
							<tr>
								<td>Sarasara</td>
								<td>Solar plexis Chakra</td>
								<td>Beyond physical</td>
							</tr>


						</table></center>

					</div>
				</div>


			</div>
			<br/>
			<br/>
			<center><button class="printpage btn-success">Click to print the page</button></center>
			<br/>
			<br/>
		</section>
		<section>
			<center>
			<form method="post" action="">
				<p class="blinktext"><strong>Give Your Feedback:</strong></p><br/>
				<input type="text" name="feedback"/><br/>
				<input type="submit" value="post"/>
			</form>
			</center>
		</section>

		<button class="scrollbutton"><span class="glyphicon glyphicon-chevron-up"></span></button>
	
	</body>
</html>

