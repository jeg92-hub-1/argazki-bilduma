<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	
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
				<li><a href="index.php" >HASIERA</a></li>
				<li><a href="login.php">LOGIN</a></li>
				<li><a href="register.php" class="selected">ERREGISTRATU</a></li>
				<li><a href="#">INFORMAZIOA</a></li>
				<li><a href="contact.html">KONTAKTATU</a></li>
			</ul>
		</nav><!-- end navigation menu -->

	</header><!-- end header -->

	<section class="main">
	<h2>Zure datuak sartu</h2>
	<form name="erregistro" id="hongkiat-form"  method="POST" >
		<section id="aligned">
			<p>NICK:</p><input type="text" name="IZENA" id="name" placeholder="Adb:Jon" autocomplete="off" tabindex="1" class="txtinput" required>
			<p>IZENA:</p> <input type="text" name="IZENA" id="name" placeholder="Adb:Jon" autocomplete="off" tabindex="2" class="txtinput" required>
			<p>ABIZENAK:</p><input type="text" name="ABIZENAK" id="name" placeholder="Adb:Egana Granado" autocomplete="off" tabindex="3" class="txtinput" required pattern="([a-zA-z]*\s[a-zA-z]*)*">
		
		</section>
		<section id="aside">	
				<p>EPOSTA:</p><input type="email" name="POSTA" id="email" placeholder="Adb:myname001@ikasle.ehu.es" autocomplete="off" tabindex="4" class="txtinput" pattern="^[a-z]*[0-9]{3}(\@irakasle|\@ikasle)\.ehu(\.es|\.eus)$" required >
					<p>PASAHITZA:</p><input type="password" name="PASAHITZA" id="password" placeholder="Adb:123456" autocomplete="off" tabindex="5" class="txtinput" >
					<p>PASAHITZA:</p><input type="password" name="PASAHITZA2" id="password2" placeholder="Adb:123456" autocomplete="off" tabindex="6" class="txtinput" onchange="pasahitzaBalidatu(password.value,password2.value)">
		</section>
		<div id="buttons">
		<input type="button" id="submitbtn"name="submit" value="SUBMIT"/>
		
		<input type="button" id="resetbtn" name="submit" value="RESET"/>
		</div>
	</form>

	</section><!-- end main -->
</div>
</body>
</html>