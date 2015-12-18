<!DOCTYPE html>

<html>
	<head>
		<title>ARGAZKI BILDUMA</title>
		<link rel='stylesheet' type='text/css' href='css/reset.css'>
		<link rel='stylesheet' type='text/css' href='css/main.css'>
		<link rel='stylesheet' type='text/css' href='css/carouselPhotos.css'>
		<link rel='stylesheet' type='text/css' href='css/settingAlbums.css'>
		<script type="text/javascript" src="js/settingAlbums.js"></script>
		<?php
			include 'php/sesioa.php';
			if(!isset($_SESSION['login_email']) || $_SESSION['login_rol']!='ADMIN')
				header('Location: ./');
		?>
		
	</head>
	<body onload="datuakKargatu('a')">
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
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
					<ul class="form-style-1" style="height:70%;">
						<li>
							<label>ERABILTZAILEAK: </label>
							<select name="combobox_user"  id="cb_user" class="field-select" onchange="erakutsiAlbumak(this)">
							</select>
							<label>ALBUMAK: </label>
							<select name="combobox_album"  id="cb_album" class="field-select" onchange="bistaratuErabiltzailearenDatuak(this,cb_user.value)">
							</select>
						</li>
						<li>
							<label>DESKRIBAPENA: </label>
							<textarea id="deskribapena" disabled >
							</textarea>
						</li>
						<li>
							<input type="submit" value="EZABATU"/>
							<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST"){
									$nick = $_POST['combobox_user'];
									include 'php/admin/albumKendu.php';
								}
							?>
						</li>
					</ul>
					<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>
					<script type='text/javascript'>
						$(document).ready( function() {$('#mezua').delay(1000).fadeOut();});
					</script>	
				</form>
				<div id="carousel">
				</div>
			</section>
		</div>
	</body>
</html>
			