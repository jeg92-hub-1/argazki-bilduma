<!DOCTYPE html>
<?php
include "php/sesioa.php";

?>
<html lang="en">
<head>
	<title>ARGAZKI BILDUMA</title>

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
	
	
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
		<center>
		<div class="login-card">
			<h1>LOG-IN</h1>
			<br>
			<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST"  >
				<input type="text" name="user" placeholder="NICK/EMAIL" required>
				<input type="password" name="pass" placeholder="PASAHITZA" required>
				<input type="submit" name="login" class="login login-submit" value="LOGIN">
			</form>
			<div class="login-help">
				<a href="register.php">Erregistratu</a> | <a href="forgotPassword.php">Pasahitza ahaztu duzu</a>
			</div>
			<?php
				include 'php/login_prozezatu.php';
			?>
		</div>
		</center>
	</section><!-- end main -->
</div>
</body>
</html>