<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
	<link rel="stylesheet" type="text/css" href="css/carouselPhotos.css">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<?php include 'php/sesioa.php'?>
	
</head>
<body>
<div id="container">
	<header>
		<div class="logo">
			<p><h1>ARGAZKI BILDUMA</h1></p>
		</div>
		<nav id="menu">
			
			<ul class="parent-menu">
				<?php mainMenua(); ?>
			</ul>
		</nav><!-- end navigation menu -->

	</header><!-- end header -->

	<section class="main">

<div id="box">

<?php include 'php/argazkiMugatuak.php';?>


</div>


	</section><!-- end main -->
</div>
</body>
</html>