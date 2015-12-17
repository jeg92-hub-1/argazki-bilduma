<!DOCTYPE html>

<html>
<head>
	<title>ARGAZKI BILDUMA</title>
 
	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
	<link rel="stylesheet" type="text/css" href="css/settingUsers.css">
    <script type="text/javascript" src="js/settingUsers.js"></script>
	<?php include 'php/sesioa.php' ?>
	
</head>
<body onload="datuakKargatu('v')">
<div id="container">
<div class="logo">
			<p><h1>ARGAZKI BILDUMA</h1></p>
		</div>

		<nav id="menu">
			<ul class="parent-menu">
				<?php mainMenua()?>
			</ul>
		</nav><!-- end navigation menu -->
	<section class="main">
		<center>
			<div class="info-user-card">
				<label>ERABILTZAILEA: </label>
				<select name="combobox_user"  id="cb_user" class="field-select" onchange="bistaratuErabiltzaileDatuak(this)">
				</select>
				<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<p>NICK:</p><input type="text" name="NICK" id="nick" autocomplete="off" tabindex="1" class="txtinput"  readonly="readonly" >
					<p>PASAHITZA:</p><input type="text" name="PASAHITZA" id="password"  autocomplete="off" tabindex="5" class="txtinput"  readonly="readonly"  >
					<p>IZENA:</p> <input type="text" name="IZENA" id="izena"  autocomplete="off" tabindex="2" class="txtinput" required   readonly="readonly" >
					<p>ABIZENAK:</p><input type="text" name="ABIZENAK" id="abizenak" autocomplete="off" tabindex="3" class="txtinput" required   readonly="readonly" >
					<p>EPOSTA:</p><input type="text" name="EMAIL" id="email" autocomplete="off" tabindex="4" class="txtinput" required   readonly="readonly"  >
					<input type="submit" id="submitbtn" class="info-user info-user-submit" name="submit"  value="BALIDATU" disabled="disabled"/>
					<div id="mezua" >
						<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST"){
								include "php/admin/erabiltzaileaBalidatu.php";
							}
						?>
					</div>
				</form>
							<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>
			<script type='text/javascript'>
				$(document).ready( function() {$('#mezua').delay(1000).fadeOut();});
			</script>	
			</div>
		</center>
	</section><!-- end main -->
</div>
</body>
</html>
			