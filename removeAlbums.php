<!DOCTYPE html>

<html>
	<head>
		<title>ARGAZKI BILDUMA</title>
	 
		<link rel='stylesheet' type='text/css' href='css/reset.css'>
		<link rel='stylesheet' type='text/css' href='css/main.css'>
		<link rel='stylesheet' type='text/css' href='css/settingPhotos.css'>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
		<script type="text/javascript" src="js/settingAlbums.js"></script>
		<?php
			include 'php/sesioa.php';
			if(!isset($_SESSION['login_email']) || $_SESSION['login_rol']!='USER')
				header('Location: ./');
		?>
		
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
			<section class="main">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
					<ul class="form-style-1">
						<li>
							<label>ALBUMAK: <span class="required">*</span></label>
							<select name="combobox_album"  id="cb_album" class="field-select" required>
							</select>
						</li>
						<li>
							<input type="submit" value="ALBUMA EZABATU" />
								<?php
									if ($_SERVER["REQUEST_METHOD"] == "POST"){
										$nick = $_SESSION['login_nick'];
										$izenburua = $_POST['combobox_album'];
										include 'php/erab/albumKendu.php';
									}
								?>
						</li>
					</ul>
				</form>
				<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>
				<script type='text/javascript'>
					$(document).ready( function() {$('#mezua').delay(1000).fadeOut();});
				</script>
			</section>
		</div>
	</body>
</html>
			