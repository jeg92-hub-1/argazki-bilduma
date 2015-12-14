<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/editProfile.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/editProfile.js"></script>
	<?php include 'php/sesioa.php';?>
	
</head>
<body onload="datuakKargatu()">
<div id="container">
		<div class="logo">
			<p><h1>ARGAZKI BILDUMA</h1></p>
		</div>


		<nav id="menu">
			<ul class="parent-menu">
				<?php mainMenua()?>
			</ul>
		</nav><!-- end navigation menu -->

	</header><!-- end header -->

	<section class="main">
		<center>
			<div class="edit-profile-card">
				<h2>ZURE DATUAK SARTU</h2>
				<br>
				<form   action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
					<p>NICK:</p><input type="text" name="NICK" id="nick" autocomplete="off" tabindex="1" class="txtinput" onchange="nickKonprobatu(nick.value)" disabled="disabled">
					<p>IZENA:</p> <input type="text" name="IZENA" id="izena"  autocomplete="off" tabindex="2" class="txtinput" required>
					<p>ABIZENAK:</p><input type="text" name="ABIZENAK" id="abizenak" autocomplete="off" tabindex="3" class="txtinput" required pattern="([a-zA-z]*\s[a-zA-z]*)*">
					<p>EPOSTA:</p><input type="text" name="EMAIL" id="email" autocomplete="off" tabindex="4" class="txtinput" pattern="^[a-z]*[0-9]{3}(\@gmail|\@hotmail)(\.es|\.com)$" required >
					<p>PASAHITZA:</p><input type="text" name="PASAHITZA" id="password"  autocomplete="off" tabindex="5" class="txtinput" required onchange="pasahitzaBalidatu(password.value)" >
					<input type="submit" class="edit-profile edit-profile-submit"name="submit"  value="GORDE"/>
					<div id="mezua" >
						<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST"){
								$pasahitza= $_POST['PASAHITZA'];
								$izena= $_POST['IZENA'];
								$abizenak= $_POST['ABIZENAK'];
								$email= $_POST['EMAIL'];
								include "php/erab/profilBerriaGorde.php";
							}
						?>
					</div>
				</form>
			</div>
		</center>
	</section><!-- end main -->
	<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>
	<script type='text/javascript'>
		$(document).ready( function() {$('#mezua').delay(1000).fadeOut();});
	</script>
</div>
</body>
</html>