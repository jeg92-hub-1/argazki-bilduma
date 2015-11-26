<?php

require 'konexioa.php';

// To protect MySQL injection for Security purpose
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$regex = "/^[a-z]*[0-9]{3}(\@gmail|\@hotmail)(\.es|\.com)$/";
	$password = $_POST['pass'];

	$nick_email= $_POST['user'];
	if(!preg_match($regex,$nick_email)){
		$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE NICK='". $nick_email ."' AND PASAHITZA='" . $password  . "';";
	}else{
		echo $nick_email;
		echo $password;
		$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE EMAIL='". $nick_email ."' AND PASAHITZA='" . $password  . "';";
	}

	$result = $dblink->query($erabiltzaileak);
	$row = $result->fetch_array(MYSQLI_BOTH);

	if($result){
		$_SESSION['login_email']=$nick_email;
		$_SESSION['login_rol']=$row['ROLA'];
		
		header('Location: ./');
		
	}


require 'deskonexioa.php';
}


?>
