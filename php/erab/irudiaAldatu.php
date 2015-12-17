<?php
	include_once 'php/konexioa.php';
	$nick = $_SESSION['login_nick'];
	$etiketaZaharra = $_POST['combobox_argazkiak'];
	$etiketaBerria = $_POST['ETIKETA'];
	$egoeraBerria = $_POST['EGOERA'];
	$izenburua = $_POST['combobox_album'];
	$sql="SELECT * FROM ALBUMA WHERE NICK='".$nick."' AND IZENBURUA='".$izenburua."'";
	// SQL exekutatu 
	$result = $dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$albumid=$row['ALBUMID'];
	
	//Argazkiko egoera zaharra lortzeko
	$sql="SELECT * FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketaZaharra'";
	// SQL exekutatu 
	$result = $dblink->query($sql);
	$row = $result->fetch_array(MYSQLI_BOTH);
	
	$egoeraZaharra = $row['EGOERA'];
	if(strcmp($etiketaZaharra,$etiketaBerria)==0 && strcmp($egoeraBerria,$egoeraZaharra)==0 ){
		echo "<p id='mezua' style='color:red'>Ez duzu ezer aldatu!</p>";
	}else{
		if(strcmp($etiketaZaharra,$etiketaBerria)!=0){
			$sql="SELECT COUNT(*) FROM ARGAZKIA WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketaBerria'";
			$result = $dblink->query($sql);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$kop=$row[0];
			if($kop==0){
					$sql="UPDATE ARGAZKIA SET ETIKETA='$etiketaBerria',EGOERA='$egoeraBerria' WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketaZaharra'";
					$result = $dblink->query($sql);
					if($result){
						echo "<p id='mezua' style='color:green'>Aldatua</p>";
					}else{
						echo "<p id='mezua' style='color:red'>Errorea aldatzerakoan</p>";
					}
			}else{
				echo "<p id='mezua' style='color:red'>Etiketa existitzen da</p>";
			}
		}else{
			$sql="UPDATE ARGAZKIA SET EGOERA='$egoeraBerria' WHERE NICK='$nick' AND ALBUMID='$albumid' AND ETIKETA='$etiketaZaharra'";
			$result = $dblink->query($sql);
			if($result){
				echo "<p id='mezua' style='color:green'>Aldatua</p>";
			}else{
				echo "<p id='mezua' style='color:red'>Errorea aldatzerakoan</p>";
			}
		}
		
	}

?>