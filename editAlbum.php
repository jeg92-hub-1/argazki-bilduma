<!DOCTYPE html>

<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/editAlbum.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>

    <script type="text/javascript" src="js/editAlbum.js"></script>
	<?php include 'php/sesioa.php' ?>
	
</head>
<body>
<div id="container">
	<header>
		<div class="logo">
			<p><h1>BILDUMA KUDEAKETA</h1></p>
		</div>

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<?php manageAlbumMenua()?>
			</ul>
		</nav><!-- end navigation menu -->

	</header><!-- end header -->

	<section class="main clearfix">
	<div class="content">
		<ul id="tabs">
			<li><a href="#" title="tab1">Argazkiak +</a></li>
			<li><a href="#" title="tab2">Argazkiak -</a></li>
			<li><a href="#" title="tab3">Albuma +</a></li>
			<li><a href="#" title="tab4">Albuma -</a></li>
		</ul>
 
		<div id="content1">
			<div id="tab1">
				<form>
					<input type=""
				</form>
			</div>
			<div id="tab2">...</div>
			<div id="tab3">...</div>
			<div id="tab4">...</div>
		</div>
	</div>
</div>
</body>
</html>