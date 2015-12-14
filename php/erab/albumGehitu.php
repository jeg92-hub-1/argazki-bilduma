<?php
	include_once 'php/konexioa.php';
	
	$sql="SELECT COUNT(*)AS KOPURUA FROM ALBUMA WHERE NICK='$nick' AND IZENBURUA='$izenburua';";
	$result = $dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$existitzenDa=$row['KOPURUA'];
	if($existitzenDa==0){
		$sql="SELECT COUNT(*)AS KOPURUA FROM ALBUMA WHERE NICK='$nick';";
		$result = $dblink->query($sql);
		$row = $result->fetch_array(MYSQLI_BOTH);
		$albumid = $row['KOPURUA'] + 1;
		$sql="INSERT INTO ALBUMA VALUES('$nick',$albumid,'$izenburua','$deskribapena')";
		$result = $dblink->query($sql);
		if($result){
			echo "<p style='color:green'>Ondo gorde da</p>";
		}else{
			echo "<p style='color:red'>Errorrea igotzerakoan</p>";
		}
		
	}else{
		echo "<p style='color:red'>Albuma existitzen da!</p>";
	}

?>