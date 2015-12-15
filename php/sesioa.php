<?php

session_start();

function mainMenua(){
	//Logeatu gabeko erabiltzailea
	echo "<li><a href='./'>HASIERA <img src='images/home.ico'/></a></li>";
	if(isset($_SESSION['login_email']) && isset($_SESSION['login_rol'])){
		if($_SESSION['login_rol']=="ADMIN"){
			//Administratzailearen  menua
			echo "<li><a href='#' >ERABILTZAILEAK <img src='images/settings.ico'/></a>";
			echo "<ul>";
				echo "<li><a href='infoUsers'>ERABILTZAILEA <img src='images/info.ico'/></a></li>";
				echo "<li><a href='removeUsers'>ERABILTZAILEA <img src='images/remove.ico'/> </a></li>";
			echo "</ul>";
			echo "</li>";
			
			echo "<li><a href='#'>ALBUMAK <img src='images/settings.ico'/></a>";
			echo "<ul>";
				echo "<li><a href='seeAllAlbum'> ALBUM GUZTIAK <img src='images/xeyes.ico'/></a></li>";
				echo "<li><a href='editAlbums'>ALBUMAK  <img src='images/pen.ico'/></a></li>";
			echo "</ul>";
			echo "</li>";
		}else{
			//Erabiltzailearen menua
			echo "<li><a href='#'>NIRE ARGAZKIAK <img src='images/settings.ico'/></a>";
			echo "<ul>";
				echo "<li><a href='myAllPhotos'>ARGAZKIAK <img src='images/xeyes.ico'/></a></li>";
				echo "<li><a href='addPhotos'>ARGAZKIAK <img src='images/add.ico'/> </a></li>";				
				echo "<li><a href='removePhotos'>ARGAZKIAK <img src='images/remove.ico'/> </a></li>";
				echo "<li><a href='editPhotos'>ARGAZKIAK <img src='images/pen.ico'/></a></li>";
			echo "</ul>";
			echo "</li>";
			echo "<li><a href='#'>NIRE ALBUMAK <img src='images/settings.ico'/></a>";
			echo "<ul>";
				echo "<li><a href='infoAlbums'>ALBUMAK <img src='images/info.ico'/> </a></li>";				
				echo "<li><a href='addAlbums'>ALBUMAK <img src='images/add.ico'/> </a></li>";				
				echo "<li><a href='removeAlbums'>ALBUMAK <img src='images/remove.ico'/> </a></li>";
				echo "<li><a href='editAlbums'>ALBUMAK <img src='images/pen.ico'/></a></li>";
			echo "</ul>";
			echo "</li>";
			
			echo "<li><a href='editProfile'>PROFILA <img src='images/pen.ico'/></a></li>";
		}
		//Aurreko aukerak + orain aipatzen direnak(bi rolentzako balio dute)
		echo "<li><a href='publicPhotos'>ARGAZKI PUBLIKOAK <img src='images/xeyes.ico'/></a></li>";
		echo "<li><a href='privatePhotos'>ARGAZKI PRIBATUAK <img src='images/xeyes.ico'/></a></li>";
		echo "<li><a href='php/logout.php'>LOGOUT <img src='images/logout.ico'/></a></li>";
	}else{
		//Logeatu gabeko erabiltzaileentzat
		echo "<li><a href='login'>LOGIN <img src='images/login.ico'/></a></li>";
		echo "<li><a href='register'>ERREGISTRATU <img src='images/signup.ico'/></a></li>";
		echo "<li><a href='publicPhotos'>ARGAZKI PUBLIKOAK <img src='images/xeyes.ico'/></a></li>";
	}
}

?>
