<?php
	include 'konexioa.php';
	$nick = $_SESSION['login_nick'];
	$sql="UPDATE ERABILTZAILEA SET PASAHITZA='$pasahitza',IZENA='$izena',ABIZENAK='$abizenak',
	EMAIL='$email' WHERE NICK='$nick';";
	
	$result=$dblink->query($sql);
	$mezua = "<h1 style='";
	if($result){
		 $mezua  = $mezua  . "color:green;'>EGUNERATUA</h1>";
	}else{
		$mezua  = $mezua  . "color:red;'>ARAZOAK EGUNERATZERAKOAN</h1>";
	}
	echo $mezua;
?>