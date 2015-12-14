<?php
	include_once 'php/konexioa.php';
	$nick = $_SESSION['login_nick'];
	$izenburua = $_POST['combobox_album'];
	$deskribapenaBerria = $_POST['deskribapena'];
	
	$sql="SELECT ALBUMID,DESKRIBAPENA FROM ALBUMA WHERE NICK='".$nick."' AND IZENBURUA='".$izenburua."'";
	$result = $dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$albumid=$row['ALBUMID'];
	$deskribapenaZaharra=$row['DESKRIBAPENA'];
	
	if(strcmp($deskribapenaZaharra,$deskribapenaBerria)!=0){
		$sql="UPDATE ALBUMA SET DESKRIBAPENA='$deskribapenaBerria' WHERE NICK='$nick' AND ALBUMID='$albumid'";
		$result = $dblink->query($sql);
		if($result){
			echo "<p id='mezua' style='color:green'>Aldatua</p>";
		}else{
			echo "<p id='mezua' style='color:red'>Errorea aldatzerakoan</p>";
		}
	}else{
		echo "<p id='mezua' style='color:red'>Deskribapen bera!</p>";		
	}

?>