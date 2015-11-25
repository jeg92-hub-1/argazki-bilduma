<?php

session_start();

function mainMenua(){
	echo "<li><a href='index.php'>HASIERA</a></li>";

	if(isset($_SESSION['login_email'])){
		echo "<li><a href='login.php'>LOGIN</a></li>";
		if($_SESSION['login_rol']=="admin"){
			echo "<li><a href='setuser.php' >ERABILTZAILEAK KUDEATU</a></li>";
			echo "<li><a href='setAlbum.php'>ARGAZKI BILDUMAK KUDEATU</a></li>";
		}else{
			echo "<li><a href='setAlbum.php'>ARGAZKI BILDUMAK KUDEATU</a></li>";
			echo "<li><a href='setProfile.php'>ARGAZKI BILDUMAK KUDEATU</a></li>";
		}
	}else{
		echo "<li><a href='login.php'>LOGIN</a></li>";
		echo "<li><a href='register.php'>ERREGISTRATU</a></li>";
		echo "<li><a href='publicAlbum.php'>ARGAZKI PUBLIKOAK</a></li>";
	}
}

?>
