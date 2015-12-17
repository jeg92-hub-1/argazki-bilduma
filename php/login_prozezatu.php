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
		$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE EMAIL='". $nick_email ."' AND PASAHITZA='" . $password  . "';";
	}

	$result = $dblink->query($erabiltzaileak);
	$row = $result->fetch_array(MYSQLI_BOTH);

	if($result){
		if(strcmp($row[0],'')==0){
			echo "<h3 id='mezua' style='color:red'>Datu okerrak!</h3>";
		}else{
			if($row['ISVALID']==1){
				$_SESSION['login_email']=$row['EMAIL'];
				$_SESSION['login_nick']=$row['NICK'];
				$_SESSION['login_rol']=$row['ROLA'];
				header('Location: ./');
			}else{
				echo "<h3 id='mezua' style='color:red'>Itxaron balidatu arte!</h3>";
			}
		}
	}else{
		echo "<p id='mezua' style='color:red'>Errorea </p>";
	}
	


require 'deskonexioa.php';
}


?>
