<?php

require 'konexioa.php';

// To protect MySQL injection for Security purpose
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$regex = "/^[a-z]*[0-9]{3}(\@gmail|\@hotmail)(\.es|\.com)$/";
$password = $_POST['pass'];
$password = stripslashes($password);
$password = mysqli_real_escape_string($dblink,$password);

$nick_email= $_POST['user'];
if(!preg_match($regex,$nick_email)){
	$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE NICK='$nick_email' AND PASAHITZA='$password'" ;
}else{
	$nick_email = stripslashes($nick_email);
	$nick_email = mysqli_real_escape_string($dblink,$nick_email);
	echo $nick_email;
	$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE EMAIL='$nick_email' AND PASAHITZA='$password'" ;
}

$result = $dblink->query($erabiltzaileak);

	if($result!=null){
		$data= date('Y/m/d G:i:s');
		$_SESSION['konexio_data']=$data;
		$konexioa="INSERT INTO konexioa (ID,POSTA,ORDUA) VALUES('','{$email}','{$data}')";
		$dblink->query($konexioa);
		$row = $result->fetch_array(MYSQLI_BOTH);

		$_SESSION['login_email']=$nick_email;
		
		$_SESSION['login_rol']=$row['ROLA'];
		header("Location: ./");
		exit;
	}
	else{
		echo "<p>Sartutako posta edo pasahitza ez da egokia</p>";
	}

require 'deskonexioa.php';
}


?>
