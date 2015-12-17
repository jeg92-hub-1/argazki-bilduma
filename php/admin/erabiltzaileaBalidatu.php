<?php
include_once 'php/konexioa.php';

	$nick = $_POST['NICK'];
	$sql="UPDATE ERABILTZAILEA SET ISVALID=1 WHERE NICK='$nick';";
	
	$result=$dblink->query($sql);
	$mezua = "<h3 id='mezua' style='";
	if($result){
		 $mezua  = $mezua  . "color:green;'>BALIDATUA</h3>";
	}else{
		$mezua  = $mezua  . "color:red;'>ARAZOAK BALIDATZERAKOAN</h3>";
	}
	echo $mezua;
	
include_once "php/deskonexioa.php";
?>