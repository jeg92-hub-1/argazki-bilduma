<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/settingPhotos.css">
	<link rel="stylesheet" type="text/css" href="css/carouselPhotos.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/settingPhotos.js"></script>
	<?php include 'php/sesioa.php';?>
	
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
			<div id="side">
					<ul class="form-style-1">
						<li>
							<label>EGOERA: <span class="required">*</span></label>
							<select name="combobox_egoera"  id="cb_egoera" class="field-select" onchange="erakutsiNireArgazkiak(this);">
								<option value="-" selected="selected">- - - - - - - -</option>
								<option value="PUB" >PUBLIKOA</option>
								<option value="PRI" >PRIBATUA</option>
								<option value="MUG" >MUGATUA</option>
							</select>
							
						</li>
					</ul>
			</div>
			
			<div id="carousel">
			</div>
	</section><!-- end main -->
</div>
</body>
</html>