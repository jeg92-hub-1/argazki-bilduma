<?php
include 'php/konexioa.php';
if(strcmp($izenburua,'-')==0){
	echo "<p id='mezua' style='color:red'>Aukeratu album bat</p>";
}else{
	//Aukeratutako albumaren id lortu
	$sql="SELECT ALBUMID FROM ALBUMA WHERE NICK='$nick' AND IZENBURUA='$izenburua'";
	$result = $dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$albumid=$row[0];
	
	//Aukeratutako Albuma ezabatzeko beharrezkoa den sententzia
	$sql="DELETE FROM ALBUMA WHERE NICK='$nick' AND IZENBURUA='$izenburua'";
	$result = $dblink->query($sql);
	if($result){
		$sql="DELETE FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid'";
		$result = $dblink->query($sql);
		echo "<p id='mezua' style='color:green'>Ezabatua</p>";
	
	}else{
		echo "<p id='mezua' style='color:red'>Errorea ezabatzerakoan</p>";
	}
}
?>