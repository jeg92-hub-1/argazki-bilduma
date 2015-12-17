<?php
include_once 'php/konexioa.php';

	$nick = $_POST['NICK'];
	$sql="UPDATE ERABILTZAILEA SET ISBLOCK=1 WHERE NICK='$nick';";
	
	$result=$dblink->query($sql);
	$mezua = "<h3 id='mezua' style='";
	if($result){
		 $mezua  = $mezua  . "color:green;'>DESBLOKEATUTA</h3>";
	}else{
		$mezua  = $mezua  . "color:red;'>ARAZOAK DESBLOKEATZERAKOAN</h3>";
	}
	echo $mezua;
	
include_once "php/deskonexioa.php";
?>