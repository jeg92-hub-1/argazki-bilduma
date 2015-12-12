<?php
	include_once 'php/konexioa.php';
	$nick = $_SESSION['login_nick'];
	$etiketaZaharra = $_POST['combobox_argazkiak'];
	$etiketaBerria = $_POST['ETIKETA'];
	$izenburua = $_POST['combobox_album'];
	$sql="SELECT ALBUMID FROM ALBUMA WHERE NICK='".$nick."' AND IZENBURUA='".$izenburua."'";
	// SQL exekutatu 
	$result = $dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$albumid=$row['ALBUMID'];
	
	if(strcmp($etiketaZaharra,$etiketaBerria)==0){
		echo "<p style='color:red'>Etiketa bera!</p>";
	}else{
		$sql="SELECT COUNT(*) FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketaBerria'";
		$result = $dblink->query($sql);
		$row = $result->fetch_array(MYSQLI_BOTH);
		$kop=$row[0];
		if($kop==0){
				$sql="UPDATE ARGAZKIA SET ETIKETA='$etiketaBerria' WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketaZaharra'";
				$result = $dblink->query($sql);
				if($result){
					echo "<p style='color:green'>Aldatua</p>";
				}else{
					echo "<p style='color:red'>Errorea aldatzerakoan</p>";
				}
		}else{
			echo "<p style='color:red'>Etiketa existitzen da</p>";
		}
	}

?>