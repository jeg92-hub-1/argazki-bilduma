<!DOCTYPE html>

<html>
	<head>
		<title>ARGAZKI BILDUMA</title>
	 
		<link rel='stylesheet' type='text/css' href='css/reset.css'>
		<link rel='stylesheet' type='text/css' href='css/main.css'>
		<link rel='stylesheet' type='text/css' href='css/settingPhotos.css'>
	 
		<script type="text/javascript" src="js/settingAlbums.js"></script>
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
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
					<ul class="form-style-1">
						<li>
							<label>ALBUM IZENBURUA: <span class="required">*</span></label>
							<input type="text" name="IZENBURUA" id="izenburua" class="field-long" required/>
						</li>
						<li>
							<label>ALBUM DESKRIBAPENA: <span class="required">*</span></label>
							<textarea id="deskribapena" name="deskribapena" style='width:100%;resize:none' required></textarea>
						</li>			
						<li>
							<input type="submit" value="GEHITU ALBUMA" />
							<?php
								if ($_SERVER["REQUEST_METHOD"] == "POST"){
									$nick = $_SESSION['login_nick'];
									$izenburua = $_POST['IZENBURUA'];
									$deskribapena = $_POST['deskribapena'];
									include 'php/erab/albumGehitu.php';
								}
							?>
						</li>
					</ul>
				</form>
			</section>
			<script type='text/javascript' src='http://code.jquery.com/jquery-latest.js'></script>
			<script type='text/javascript'>
				$(document).ready( function() {$('#mezua').delay(1000).fadeOut();});
			</script>	
		</div>
	</body>
</html>
			