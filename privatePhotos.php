<!DOCTYPE html>
<html>
	<head>
		<title>ARGAZKI BILDUMA</title>

		<link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/carouselPhotos.css">
		<script type="text/javascript" src="js/settingPhotos.js"></script>
		<?php
			include 'php/sesioa.php';
			if(!isset($_SESSION['login_email']))
				header('Location: ./');
		?>
		
	</head>
	<body>
		<div id="container">
			<div class="logo">
				<p><h1>ARGAZKI BILDUMA</h1></p>
			</div>

			<nav id="menu">
				<ul class="parent-menu">
					<?php mainMenua(); ?>
				</ul>
			</nav><!-- end navigation menu -->

			<section class="main">
				<div id="box">
					<?php include 'php/argazkiPribatuak.php';?>
				</div>
			</section><!-- end main -->
		</div>
	</body>
</html>