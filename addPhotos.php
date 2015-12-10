<!DOCTYPE html>

<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>
 
	<link rel='stylesheet' type='text/css' href='css/reset.css'>
	<link rel='stylesheet' type='text/css' href='css/main.css'>
	<link rel='stylesheet' type='text/css' href='css/settingPhotos.css'>
    
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="http://code.jquery.com/jquery-1.6.3.min.js"></script>

    <script type="text/javascript" src="js/editPhoto.js"></script>
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
							<label>ALBUMAK: <span class="required">*</span></label>
							<select name="combobox_album"  id="cb_album" class="field-select" onchange="showValue($('#cb_album option:selected').text());">
								<?php include 'php/erab/cb_albumak.php';?>
							</select>
						</li>
						<li>
							<label>EGOERA: <span class="required">*</span></label>
							<select name="combobox_egoera"  id="cb_egoera" class="field-select">
								<option value="PUB" selected="selected">PUBLIKOA</option>
								<option value="PRI" >PRIBATUA</option>
								<option value="MUG" >MUGATUA</option>
							</select>
							
						</li>
						<li>
							<label>ETIKETA: <span class="required">*</span></label>
							<input type="text" name="ETIKETA" id="etiketa" class="field-long" /></li>
						<li>
							<label>IRUDIA: <span class="required">*</span></label>
							<input type="file" name="irudiaIgo" onchange="showMyImage(this)" class="field-long" required/>
						</li>
						
						<li>
							<input type="submit" value="GEHITU IRUDIA" />
							<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST"){
								$nick = $_SESSION['login_nick'];
								$etiketa = $_POST['ETIKETA'];
								$albumIzenburua = $_POST['combobox_album'];
								$egoera=$_POST['combobox_egoera'];
								include 'php/erab/irudiaGehitu.php';
							}
							?>
						</li>
					</ul>
				</form>
				<img id="thumbnil" style="display:none" src="" alt="image"/>
	</section>
	
</div>
</body>
</html>
			