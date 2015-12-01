<?php

session_start();

function mainMenua(){
	echo "<li><a href='./'>HASIERA</a></li>";
	if(isset($_SESSION['login_email']) && isset($_SESSION['login_rol'])){
		if($_SESSION['login_rol']=="ADMIN"){
			echo "<li><a href='setUser' >ERABILTZAILEAK KUDEATU</a></li>";
			echo "<li><a href='manageAlbum'>ARGAZKI BILDUMAK KUDEATU</a></li>";
		}else{
			echo "<li><a href='manageAlbum'>ARGAZKI BILDUMAK KUDEATU</a></li>";
			echo "<li><a href='setProfile'>PROFILA KUDEATU</a></li>";
		}
		
		echo "<li><a href='publicAlbum'>ARGAZKI PUBLIKOAK IKUSI</a></li>";
		echo "<li><a href='php/logout.php'>LOGOUT</a></li>";
	}else{
		echo "<li><a href='login'>LOGIN</a></li>";
		echo "<li><a href='register'>ERREGISTRATU</a></li>";
		echo "<li><a href='publicAlbum'>ARGAZKI PUBLIKOAK</a></li>";
	}
}

function manageAlbumMenua(){

	if(isset($_SESSION['login_email'])){
		echo "<li><a href='manageAlbum'>HASIERA </a></li>";
		if($_SESSION['login_rol']=="ADMIN"){
			echo "<li><a href='editAlbums'>ERABILTZAILEA EZABATU</a></li>";
			echo "<li><a href='seeAllAlbum' >ALBUM GUZTIAK IKUSI</a></li>";
			echo "<li><a href='editAlbums'>ALBUMAK EDITATU</a></li>";
		}else{
			echo "<li><a href='nireAlbumak'>NIRE ALBUMAK IKUSI</a></li>";
			echo "<li><a href='editPhoto'>ARGAZKIAK EDITATU</a></li>";
			echo "<li><a href='editAlbum'>ALBUMAK EDITATU</a></li>";
			
		}
		
		echo "<li><a href='publicAlbum'>ARGAZKI PUBLIKOAK IKUSI</a></li>";
		echo "<li><a href='./'>ATZERA</a></li>";
	}else{
		header('Location: ./');
	}
}

?>
