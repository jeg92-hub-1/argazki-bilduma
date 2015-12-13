<!DOCTYPE html>

<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>
 
	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
	<link rel='stylesheet' type='text/css' href='css/settingAlbums.css'>
    
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>

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
		<ul class="form-style-1">
			<li>
				<label>ALBUMAK: <span class="required">*</span></label>
				<select name="combobox_album"  id="cb_album" class="field-select" onchange="deskribapenaErakutsi(this)">
					<?php include 'php/erab/cb_albumak.php';?>
				</select>
			</li>
			<li>
				<label>DESKRIBAPENA: <span class="required">*</span></label>
				<textarea id="deskribapena" rows="4" cols="50">
				</textarea>
		</ul>
	</section>
	
</div>
</body>
</html>
			