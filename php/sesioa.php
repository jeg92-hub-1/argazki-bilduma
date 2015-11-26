<?php

session_start();

function mainMenua(){
	if(isset($_SESSION['login_email'])){
		echo "<li><a href='php/logout.php'>LOGOUT</a></li>";
		if($_SESSION['login_rol']=="ADMIN"){
			echo "<li><a href='setUser' >ERABILTZAILEAK KUDEATU</a></li>";
			echo "<li><a href='manageAlbum'>ARGAZKI BILDUMAK KUDEATU</a></li>";
		}else{
			echo "<li><a href='manageAlbum'>ARGAZKI BILDUMAK KUDEATU</a></li>";
			echo "<li><a href='setProfile'>PROFILA KUDEATU</a></li>";
		}
	}else{
		
	echo "<li><a href='./'>HASIERA</a></li>";

		echo "<li><a href='login'>LOGIN</a></li>";
		echo "<li><a href='register'>ERREGISTRATU</a></li>";
		echo "<li><a href='publicAlbum'>ARGAZKI PUBLIKOAK</a></li>";
	}
}

function manageAlbumMenua(){

	if(isset($_SESSION['login_email'])){
		echo "<li><a href='php/logout.php'>LOGOUT</a></li>";
		if($_SESSION['login_rol']=="ADMIN"){
			echo "<li><a href='editAlbums'>ERABILTZAILEAK </a></li>";
			echo "<li><a href='seeAllAlbum' >ALBUM GUZTIAK IKUSI</a></li>";
			echo "<li><a href='editAlbums'>ALBUMAK EDITATU</a></li>";
		}else{
			echo "<li><a href='seeMyAlbums'>NIRE ALBUMAK IKUSI</a></li>";
			echo "<li><a href='editAlbum'>ALBUMA EDITATU</a></li>";
		}
		
		echo "<li><a href='publicAlbum'>ARGAZKI PUBLIKOAK</a></li>";
	}else{
		header('Location: ./');
	}
}

?>
