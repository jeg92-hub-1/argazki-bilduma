<!DOCTYPE html>

<html>
<head>
	<title>ARGAZKI BILDUMA</title>
 
	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
    <link rel='stylesheet' type='text/css' href='css/carouselPhotos.css'>
	<link rel='stylesheet' type='text/css' href='css/settingAlbums.css'>

	<script type="text/javascript"  src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script type="text/javascript" src="js/settingAlbums.js"></script>
	<?php
		include 'php/sesioa.php';
		if(!isset($_SESSION['login_email']) || $_SESSION['login_rol']!='USER')
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
				<?php mainMenua()?>
			</ul>
		</nav><!-- end navigation menu -->
	<section class="main">
		<ul class="form-style-1" style="height:70%;">
			<li>
				<label>ALBUMAK: </label>
				<select name="combobox_album"  id="cb_album" class="field-select" onchange="erakutsiDeskribapena(this)">
					<?php include 'php/erab/cb_albumak.php';?>
				</select>
			</li>
			<li>
				<label>DESKRIBAPENA: </label>
				<textarea id="deskribapena" disabled >
				</textarea>
			</li>
			<li>
				<input type="button" id="boton" value="GRAFIKOA IKUSI"/>
			</li>
		</ul>
			<div id="grafikoa" style="width: 480px; height: 400px;float:left;">
			
			</div>
	</section>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 
		<script>
			$(document).ready(function() {
				$("#boton").click(function(event) {
					var x = $("#cb_album option:selected").text();
					
					$("#grafikoa").load("php/bar.php",{izenburua: x}, function(response, status, xhr) {
						  if (status == "error") {
						    var msg = "Error!, zeozer ez da ondo joan: ";
						    $("#capa").html(msg + xhr.status + " " + xhr.statusText);
						  }
						});
				});
			});
	</script>
</div>
</body>
</html>
			