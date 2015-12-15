<!DOCTYPE html>

<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>
 
	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
	<link rel="stylesheet" type="text/css" href="css/settingUsers.css">
    <script type="text/javascript" src="js/settingUsers.js"></script>
	<?php include 'php/sesioa.php' ?>
	
</head>
<body>
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
				<select name="combobox_user"  id="cb_user" class="field-select" onchange="bistaratuErabiltzaileInfo(this)">
					<?php include 'php/admin/cb_nickak.php';?>
				</select>
				<form>
					<p>NICK:</p><input type="text" name="NICK" id="nick" autocomplete="off" tabindex="1" class="txtinput" disabled="disabled">
					<p>PASAHITZA:</p><input type="text" name="PASAHITZA" id="password"  autocomplete="off" tabindex="5" class="txtinput" required  disabled="disabled" >
					<p>IZENA:</p> <input type="text" name="IZENA" id="izena"  autocomplete="off" tabindex="2" class="txtinput" required  disabled="disabled">
					<p>ABIZENAK:</p><input type="text" name="ABIZENAK" id="abizenak" autocomplete="off" tabindex="3" class="txtinput" required  disabled="disabled">
					<p>EPOSTA:</p><input type="text" name="EMAIL" id="email" autocomplete="off" tabindex="4" class="txtinput" required  disabled="disabled" >
				</form>
			</div>
		</center>
	</section><!-- end main -->
</div>
</body>
</html>
			