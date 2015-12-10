<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/carouselPhotos.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<?php include 'php/sesioa.php';?>
	
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

<?php
	include 'php/argazkiPublikoak.php';
?>


</div>


	</section><!-- end main -->
</div>
</body>
</html>