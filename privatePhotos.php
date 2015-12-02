<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login-register.css">
	
	<link rel="stylesheet" type="text/css" href="css/publicPhotos.css">
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

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<?php mainMenua(); ?>
			</ul>
		</nav><!-- end navigation menu -->

	</header><!-- end header -->

	<section class="main clearfix">

<div id="box">

<?php include 'php/argazkiPribatuak.php';?>


</div>


	</section><!-- end main -->
</div>
</body>
</html>