<?php
	include_once 'php/konexioa.php';
	
if($_FILES["irudiaIgo"]["size"] != 0){
	if(!empty(getimagesize($_FILES["irudiaIgo"]["tmp_name"]))) {
		//echo "File is an image .";
		$data = $dblink->real_escape_string(file_get_contents($_FILES  ['irudiaIgo']['tmp_name']));
		$sql="SELECT ALBUMID FROM ALBUMA WHERE NICK='".$nick."' AND IZENBURUA='".$albumIzenburua."'";
		// SQL exekutatu 
		$result = $dblink->query($sql);
		$row = $result->fetch_array(MYSQLI_BOTH);
		$albumid=$row['ALBUMID'];
		$sql1="SELECT COUNT(*)AS KOPURUA FROM ARGAZKIA WHERE NICK='".$nick."' AND ALBUMID=".$albumid.";";
		$result1 = $dblink->query($sql1);
		$row = $result1->fetch_array(MYSQLI_BOTH);
		$argazkiid = $row['KOPURUA'] + 1;
		
		$sql2="INSERT INTO ARGAZKIA VALUES('".$nick."',$albumid,$argazkiid,'".$etiketa."','".$data."','".$egoera."')";
		$result2 = $dblink->query($sql2);
		if($result2){
			echo "<p id='mezua' style='color:green'>Igota</p>";
		}else{
			echo "<p id='mezua' style='color:red'>Errorea Igotzerakoan</p>";
		}
	}
	else {
		echo "File is not an image.";
	}
}

	// DB deskonektatzeko
include_once "php/deskonexioa.php";
?>