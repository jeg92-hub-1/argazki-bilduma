<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/editProfile.js"></script>
	<?php include 'php/sesioa.php';?>
	
</head>
<body onload="datuakKargatu()">
<div id="container">
	<header>
		<div class="logo">
			<p><h1>ARGAZKI BILDUMA</h1></p>
		</div>

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<?php mainMenua()?>
			</ul>
		</nav><!-- end navigation menu -->

	</header><!-- end header -->

	<section class="main">
	<h2>ZURE DATUAK SARTU</h2>
	<form name="erregistro" id="hongkiat-form"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
		<section id="aligned">
			<p>NICK:</p><input type="text" name="NICK" id="nick" autocomplete="off" tabindex="1" class="txtinput" onchange="nickKonprobatu(nick.value)" required>
			<p>IZENA:</p> <input type="text" name="IZENA" id="izena"  autocomplete="off" tabindex="2" class="txtinput" required>
			<p>ABIZENAK:</p><input type="text" name="ABIZENAK" id="abizenak" autocomplete="off" tabindex="3" class="txtinput" required pattern="([a-zA-z]*\s[a-zA-z]*)*">
		
		</section>
		<section id="aside">	
				<p>EPOSTA:</p><input type="text" name="EMAIL" id="email" autocomplete="off" tabindex="4" class="txtinput" pattern="^[a-z]*[0-9]{3}(\@gmail|\@hotmail)(\.es|\.com)$" required >
				<p>PASAHITZA:</p><input type="text" name="PASAHITZA" id="password"  autocomplete="off" tabindex="5" class="txtinput" required onchange="pasahitzaBalidatu(password.value)" >
		</section>
		<div id="mezua" >
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST"){
					include "php/profilBerriaGorde.php";
				}
			?>
		</div>
		<div id="buttons">
			<input type="submit" id="submitbtn" name="submit"  value="SAVE"/>
		</div>
	</form>

	</section><!-- end main -->
</div>
</body>
</html>